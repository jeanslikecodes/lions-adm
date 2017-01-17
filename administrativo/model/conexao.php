<?php

	try {
		$pdo=new PDO("mysql:host=localhost;dbname=lions","","");
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
