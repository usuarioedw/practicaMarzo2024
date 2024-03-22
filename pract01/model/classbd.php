<?php
function conecta(){
	$mysqli = new mysqli('localhost','root','','dbejemplo');
	/* verificar conexión */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	return $mysqli;
}

function selecciona($mysqli){
	$sql01="SELECT * FROM persona";
	$result=$mysqli->query($sql01);
	$row=$result->fetch_array();
	return $row;
}

function agrega(){

}

function actualiza(){

}

function finaliza(){

}

$mysqli01=conecta();
$datrow=selecciona($mysqli01);
var_dump($datrow);

?>