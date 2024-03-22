<?php

require_once("../model/classbd.php");

class persona{
	public $nombre, $apaterno, $amaterno, $fechanac, $nombreusu, $passwusu, $rol;
	//public function setDatos($d);
	public function setDatos($d) {
		$this->apaterno=$d;
		return;
	}
	public function getDatos($usuario) {
		//select
		echo "mostraria datos<br/>";
		return;
	}
}

class usuario extends persona{
	//public $nombre, $apaterno, $amaterno, $fechanac, $nombreusu, $passwusu, $rol;

}

$p=new persona();
//$p->nombre="Edmundo";
$p->setDatos("Jhon");
$p->getDatos("sdfsdf");
var_dump($p);
echo "---------<br/>";
$u=new usuario();
$u->nombre="Carlos";
var_dump($u);

?>