<?php 
include 'class.blog.php';
$datos = array('titulo'=>'', 'subtitulo'=>'', 'contenido'=>'Contenido','encabezado'=>'','portada'=>'','id'=>'');
$accion = 'insert';
include 'get.php';
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Administrador blog</title>
 	<link rel="stylesheet" type="text/css" href="css/estilo-back.css">
 	<link rel="stylesheet" type="text/css" href="css/fonts.css">
 	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
 </head>
 <body>

 	<header><a href="index.php"><h1>Panel de administración blog</h1></a></header>

 	<form  action="post.php" method="post">
 		<div><h1>Nueva entrada de blog</h1></div>
 		<input type="texto" name="titulo" value="<?php echo $datos['titulo'];?>" placeholder="Titulo" required="required">
 		<input type="texto" name="subtitulo" value="<?php echo $datos['subtitulo'];?>" placeholder="Subtitulo" required="required">
 		<textarea name="contenido" required="required"><?php echo $datos['contenido']; ?></textarea>
 		<input type="file" name="encabezado" value="<?php echo $datos['encabezado'];?>" placeholder="Header" required="required">
 		<input type="file" name="portada" value="<?php echo $datos['portada'];?>" placeholder="Portada" required="required">
 		<input type="hidden" name="id" value="<?php echo $datos['id'] ?>">
 		<input type="hidden" name="accion" value="<?php echo $accion ?>">
 		<input type="submit" name="submit" value="Enviar">

 	</form>

 	<?php include 'tabla.php' ?>
 </body>
 </html>