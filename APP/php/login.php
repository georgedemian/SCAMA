<?php 
session_start();
error_reporting (5); 
if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) OR strtolower($_SERVER['HTTP_X_REQUESTED_WITH'] != 'xmlhttprequest')){
include('config.php');
$user= $_POST['user'];
$pass= $_POST['password'];

     $query = "SELECT * FROM users WHERE user='$user' or email='$user' "; 
   

     $result = $conexion->query($query);

     $row  = mysqli_fetch_array($result );


     $row_cnt = mysqli_num_rows($result);

     if ($row_cnt > 0) {
       
           if($row['password'] == ($pass)){


           $_SESSION['usuario']=$row['user'];
           $_SESSION['id']=$row['id'];
           $_SESSION['logged']=true;

           echo 1;

          }else{

           echo 0;

          }


     }

}else{
  echo "ERROR";
}
?>
