<?php
// Classe connexió, haureu d'adaptar la connexió al vostre servidor.
// IMPORTANT! Aquest fitxer no s'ha d'entregar
class Connexio{
	public function connectar(){
		$link = new PDO("mysql:host=localhost;dbname=sintesi","root","");
		// $link = new PDO("mysql:host=localhost;dbname=firaempresa","root","Salle@22");
		return $link;
	}
}




?>
<!--  -->
