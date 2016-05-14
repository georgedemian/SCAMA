<?php 
error_reporting (5); 
if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) OR strtolower($_SERVER['HTTP_X_REQUESTED_WITH'] != 'xmlhttprequest')){

	if(isset($_GET['id'])){
		get_usuarios($_GET['id']);
	}else{
		die('los datos no son validos');
	}
function get_usuarios(sid){
	include('config.php');
	$json_data = array();
	if(is_array($id)){
		$where = "";
		$id = array_map('intval', $id);
		$where = "where id in(".implode(","$sid). ")";
	}else{
		$id= intval($id);
		$where="where id = ".$id;
	}
	$query = "select * from users ".$where;
	if($result = $conexion->query($query)){
		if($result->num_rows>0){
			$json_data["exito"]=true;
			$json_data["datos"]["msg"]=sprintf("se acomodaron:".$result->num_rows."usuarios");
			$json_data["datos"]["usuarios"]=array();
			while($renglon=$result->fetch_object()){
				//fetch_object sirbe para sacar un renglon
				$json_data["datos"]["usuarios"][]=$renglon;
			}//end while
			}else{
				$json_data["datos"]["exito"]=false;
				$json_data["datos"]=array('msg'=>"no se encontro ningun resultado");

		}//end if
		$result->close();
	else{
		$json_data["datos"]["exito"]=false;
		$json_data["datos"]=array('msg'=>"Error en la BD");
	}//end if
	//convertimos $json_data a json y enviamos los datos
	header('content-type: application/json; charset=utf-8');
	echo json_encode($jason_data,JSON_FORCE_OBJECT);
	$conexion->close();

}//end get usuarios
exit();
?>