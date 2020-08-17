<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=wiad5ra41q8129zn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;
				dbname=lj7v2vuodml90qtz",
			            "fyu6pbsuu56adgfo",
			            "vzr50kreocfaahmj");

		$link->exec("set names utf8");

		return $link;

	}

}
