<?php 
include 'class.blog.php';

if (isset($_POST['submit'])) {	
		if ($_POST['accion'] == 'insert') {

			$titulo = $_POST['titulo'];
			$subtitulo = $_POST['subtitulo'];
			$contenido = $_POST['contenido'];
			$encabezado = addcslashes(file_get_contents($_FILES['encabezado']['tmp_name']):
			$portada = addcslashes(file_get_contents($_FILES['portada']):

			$blog = new Blog( $titulo, $subtitulo, $contenido, $encabezado, $portada);
			$blog->insert();
		}
		if ($_POST['accion'] == 'update') {
			$titulo = $_POST['titulo'];
			$subtitulo = $_POST['subtitulo'];
			$contenido = $_POST['contenido'];
			$encabezado = $_POST['encabezado'];
			$portada = $_POST['portada'];
			$id = $_POST['id'];

			$blog = new Blog( $titulo, $subtitulo, $contenido, $encabezado, $portada, $id);
			$blog->update();
		}
	}
	else{
	header("location: index.php");	
	}

 ?>