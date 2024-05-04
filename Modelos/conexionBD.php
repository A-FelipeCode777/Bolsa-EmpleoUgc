<?php

	class Connection{


		static public function infoDatabase(){

			$infoDB = array(
				"host" => "localhost",
				"database" => "beu",
				"user" => "root",
				"pass" => ""

			);
			

			return $infoDB;

		}
		static public function connect(){


			try{

				$link = new PDO(
					"mysql:host=".Connection::infoDatabase()["host"].";dbname=".Connection::infoDatabase()["database"],
					Connection::infoDatabase()["user"], 
					Connection::infoDatabase()["pass"]
				);

				$link->exec("set names utf8");

			}catch(PDOException $e){

				die("Error: ".$e->getMessage());

			}

			return $link;

		}

	}
	
?>