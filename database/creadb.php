<?php

	try {
		$conn = new PDO("mysql:host=localhost;", "root", "");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS db_itiad";
		$conn->exec($sql);
		$sql = "use db_itiad";
		$conn->exec($sql);
		echo "Database: db_itiad; Successfully Created!<br>";
	} catch(PDOException $e) {
	    echo "Error".$e->getMessage()."<br>";
	}