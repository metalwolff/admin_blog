<table>
	<th>Titulo</th>
	<th>Subtitulo</th>
	<th>Contenido</th>
	<th>Encabezado</th>
	<th>Portada</th>
	<th>Editar</th>
	<th>Eliminar</th>

<?php 

$blog = Blog::ningunDato();

$datos = $blog->select();

while ($row = $datos->fetch_array()) {
	echo '<tr>';
	echo '<td>', $row['titulo'],'</td>';
	echo '<td>', $row['subtitulo'],'</td>';
	echo '<td>', $row['contenido'],'</td>';
	echo '<td>', $row['encabezado'],'</td>';
	echo '<td>', $row['portada'],'</td>';
	echo "<td> <a class=\"icon-pencil\" href=\"index.php?accion=editar&&id=$row[id]\"></a></td>";
	echo "<td> <a class= \"icon-cross\" href=\"index.php?accion=eliminar&&id=$row[id]\"></a></td>";
	echo '</tr>';
}
 ?>
</table>