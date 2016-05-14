<?php   
session_start();// iniciamos sesion
error_reporting (5); //ejecutamos la funcion para no mostrar reportes en pagina


 ?>

<!--
-->
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
</head>

<div id="altura" class="panel-body"><!-- ESTE ES EL MERO MI COMPA -->
		

</div>



<script language="javascript">

$(document).ready(function(){
setInterval(Altura,100);

function Altura(){
$("#altura").load("leerdb.php");
}

       
  });


</script>
</html>