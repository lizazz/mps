<?php
		/* connect to MySQL with driver */
	$dsn = 'mysql:dbname=mps;host=127.0.0.1';
	$user = 'kayako';
	$password = '6704sJkitHPzXHVZ';

	try {
	    $dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
	    echo 'connection to data base is failed: ' . $e->getMessage();
	}