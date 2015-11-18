<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Upload</title>
		<style>
			/* estilos para el formulario */
			.content{
				width: 1000px;
				margin: 0 auto;
				background-color: #eee;
				padding: 20px;
				min-height: 400px;
				text-align: center;
				font-size: 20px;
			}
			input{
				cursor: pointer;
				display: block;
				margin: 15px auto;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<h2>Formulario Upload en PHP </h2>		
			<form action="upload.php" method="post" enctype="multipart/form-data">
			    <strong>Seleciona un archivo :</strong>
			    <input type="file" name="file" required>
			    <input type="submit" name="enviarFile" value="Aceptar">
			</form>
		</div>
	</body>
</html>