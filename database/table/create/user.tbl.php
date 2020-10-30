<?php

	include_once "../config/database.php";

	$chksql = "SELECT 1 FROM tbl_users LIMIT 1";
	$chksql = $dbcretbl->query($chksql); //$db needs to be PDO instance

	if($chksql) {
		echo "Database Table: TBL_USERS; Already exist!<br>";
	} else {
		try {
			$sql = "CREATE TABLE IF NOT EXISTS TBL_USERS(
				userid INT(11) AUTO_INCREMENT PRIMARY KEY, 
				usercode TEXT NOT NULL, 
				passcode TEXT NOT NULL, 
				email TEXT NOT NULL, 
				nickname VARCHAR(50) NULL, 
				ustatus INT(11) NULL, 
				ulevel INT(11) NULL, 
				datecreated DATE NOT NULL);";
			$dbcretbl->exec($sql);
			echo "Database Table created successfully: System User<br>";
		} catch(PDOException $e) {
			echo $e->getMessage()."<br>";
		}
	}