<?php

class Conexion{

	static public function conectar(){

<<<<<<< HEAD
		$link = new PDO("mysql:host=localhost;dbname=sis_inventario",
			            "root",
			            "");
=======
		$link = new PDO("mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_202e23678af4aa5",
			            "b4e9244ef09c92",
			            "c1f39122");
>>>>>>> 0e7f529b60b0bc3ee632305ee171f7c0713235b8

		$link->exec("set names utf8");

		return $link;

	}

<<<<<<< HEAD
}
=======
}
>>>>>>> 0e7f529b60b0bc3ee632305ee171f7c0713235b8
