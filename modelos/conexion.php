<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=us-cdbr-east-02.cleardb.com;
				dbname=heroku_202e23678af4aa5",
			            "b4e9244ef09c92",
			            "c1f39122");

		$link->exec("set names utf8");

		return $link;

	}

}
