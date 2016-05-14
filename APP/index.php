<?php   
session_start();// iniciamos sesion
error_reporting (5); //ejecutamos la funcion para no mostrar reportes en pagina

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCAMA WEB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
 
  

</head>
  <body>
    <div style="float:right;"> 
     
       <?php  if (!isset($_SESSION['logged'])) {  // si logged no esta iniciado mandamos a llamar las siguientes lineas 

        echo '
     <button id="join" class="btn btn-info btn-pressure pull-right">Join</button> 
     <button class="btn btn-default btn-pressure pull-right">Forgot password</button>
                  ';//mostramos el boton de registro y el de recuperar contraseña

                }?>

 <?php 
if (isset($_SESSION['logged'])) {// volvemos a revisar si la sesion esta conectada
  
 if ($_SESSION['logged']==true  ) { echo '
     <button id="LogOut" class="btn btn-info btn-pressure pull-right" >LogOut</button> ';}//cuando se conecta mostramos el boton de logout

} ?>       

                </div>
   <div class="header">
</div>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> 
       <li> <a id="inicio" class="active" href="#">Inicio</a></li>
        <li><a id="nosotros" href="#">Nosotros <span class="sr-only">(current)</span></a></li>
        <li><a id="contactanos" href="#">Contactanos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Imagenes</a></li> 
             <li role="separator" class="divider"></li>
            <li><a href="#">Videos</a></li>
          
          </ul>
        </li>
     
       <?php if ($_SESSION['logged']==true  )//Si la sesion esta iniciada mostramos el panel de control
        { echo '<li><a href="#" id="menu"> Panel de Control</a></li>';}?>
 
      

                   
      <?php if($_SESSION['logged']!=true )// si la sesion no esta iniciada mostramos los campos para iniciar sesion
      { echo ' 
      <form id="signin" class="navbar-form navbar-right" role="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="user" type="text" class="form-control" name="user" value="" placeholder="Email Address">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        
                        </div>

                        <button type="submit" id="btn-login" class="btn btn-primary">Login</button>
                   </form>';}// ocultamos los campos?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imgs/uno.jpg" >
      </div>

      <div class="item">
        <img src="imgs/dos.jpg" >
      </div>
    
      <div class="item">
        <img src="imgs/tres.jpg" >
      </div>

      <div class="item">
        <img src="imgs/cuatro.jpg">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="content">

    

</div>     
 <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>

</body>
 <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.26875.js"></script>
<script>
$(document).ready(function(){ //cuando el documento este listo ejecutamos las funciones

   $(".content").load("home.html") //al div con la clase content le cargamos el fragmento html

    $("#inicio").click(function(){// al hacer click en inicio le cargamos con ajax el fragmento home y mostramos el carousel
        $(".content").load("home.html");
        $("#myCarousel").show();// Mostramos el Carousel
         $("#inicio").active();// ponemos el boton como activo
    });


    $("#menu").click(function(){// al hacer click en menu ocultamos el menu y cargamos el fragmento
        $(".content").load("menu.php");
        $("#myCarousel").hide();// ocultamos el carousel
         $("#menu").active();
    });

     $("#join").click(function(){
        $(".content").load("register.php");
        $("#myCarousel").hide();
    });

    $("#LogOut").click(function(){
      location.href="php/logout.php";// al hacer click en logout cargamos la locacion logout,php
   })
     $("#contactanos").click(function(){
        $(".content").load("contact.html");
        $("#myCarousel").hide();
        $("#contactanos").addclass("active");
    });

});
</script>
  <script src="js/php.js"></script><!--Cargamos las librerias-->
   <script src="js/registro.js"></script>


</html>
