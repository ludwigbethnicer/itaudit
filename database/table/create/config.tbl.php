<?php

	include_once "../config/database.php";

	$chksql = "SELECT 1 FROM config LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: CONFIG; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS CONFIG(
				theme varchar(50) NOT NULL, 
				homepage varchar(50) NOT NULL, 
				favicon text NOT NULL, 
				owner text NOT NULL, 
				pemail text NOT NULL, 
				mobile varchar(20) NOT NULL, 
				telno varchar(20) NOT NULL, 
				domainame varchar(100) NOT NULL, 
				address text NOT NULL, 
				title varchar(28) NOT NULL
			);";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: System Configuration<br>";
		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
	}