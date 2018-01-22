<?php 

if ( (isset($_GET['accion'])) && (isset($_GET['id'])) && (is_numeric($_GET['id'])) && ($_GET['accion'] == 'editar')) {

	$id = $_GET['id'];

	$blog = Blog::soloId($id);

	$array = $blog->selectId();
	$datos = $array->fetch_array();

	$accion = 'update';
}elseif((isset($_GET['accion'])) && (isset($_GET['id'])) && (is_numeric($_GET['id'])) &&($_GET['accion'] == 'eliminar')) {
	$id = $_GET['id'];

	$blog = Blog::soloId($id);

	$array = $blog->delete();
	
}elseif (isset($_GET['res'])) {
	echo $_GET['res'];
}

 ?>