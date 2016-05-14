<?php 

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost:3306', 'root', 'root');

mysql_select_db('bitacora');

$query=mysql_query("SELECT altura FROM altura where id=1;");

$show=mysql_result($query,0);


echo '<html>
				<h1>la altura actual es: '.$show.'mm</h1>

	</html>';

 ?>
<!DOCTYPE html>
<html>
<head>
	
</html>