<?php

header("Content-type: application/json");
header("Access-Control-Allow-Origin: *");

error_reporting(E_ALL);
ini_set("display_errors", 1);

$comando = '0';

if (isset($_GET['action']))
{

    require("php_serial.class.php");

	        
	$serial = new phpSerial();
	        
	$serial->deviceSet("COM5");
        $serial->confBaudRate(9600);
        $serial->deviceOpen();
            
	$comando = $_GET['action'];
	$serial->sendMessage($comando);
	
        
	//$read = $serial->readPort();
	$serial->deviceClose();
	//$message = array('mensaje' => $read);
	//echo json_encode($message);
}

//header("Location: http://localhost:9000/#/inicio");
?>
