<?php 
	
	header('Content-Type: text/html; charset=utf-8');

	/* Validamos sí se ha presionado el boton Aceptar. */
	if(isset($_POST['enviarFile']))
	{
		
		/* Validamos si se ingreso un archivo en el input file. */
		if( $_FILES['file']['size'] != 0 )
		{

			/* Configuraciones de carpeta que se subiran los archivos. */
			$target_dir = "uploads/";
			

			/* Concatenación de la carpeta uploads con
			la función basename que nos devuelve el último componente 
			de nombre de una ruta. */
			$target_file = $target_dir . basename($_FILES["file"]["name"]);

			/* Varible bandera que nos va permitir verificar el estado de subida del
			archivo. */
			$uploadOk = 1;

			/* Con la función pathinfo, obtenemos la extensión del $target_file */
			$FileTypeExtension = pathinfo($target_file,PATHINFO_EXTENSION);
			
			/* Verificamos si ya existe ese archivo. */

			if (file_exists($target_file)) 
			{
    			echo " Error, el archivo ya existe. ";
    			$uploadOk = 0;
			}

			/* Verificamos el tamaño del archivo que sea menor de 1MB . */
			if ($_FILES["file"]["size"] > 1048576)
			{
    			echo " Error , el archivo es demasiado grande. ";
    			$uploadOk = 0;
			}
			
			/* Si en caso entro algunos de los if anteriores, este if le marca
			 un error con la variable bandera que definimos anteriormente .
			*/

			if ($uploadOk == 0) 
			{
    			echo " Error, Tu archivo no se pudo subir. ";

			}
			else 
			{
				/* Mueve un archivo subido a una nueva ubicación. */
    			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
    			{
        			echo " Tu archivo ". basename( $_FILES["file"]["name"]). " fue subido con éxito .";
        		} 
        		else
        		{
        			echo " Error, Hay un error al subir el archivo. ";
        		}
			}
		}
		else
		{
			echo " No se ingreso un archivo. ";
			exit();
		}

	}
	else
	{
		echo " No se presiono el boton aceptar. ";
		exit();
	}

 ?>