<?php
		/* Подключение к базе данных MySQL с помощью вызова драйвера */
	$dsn = 'mysql:dbname=mps;host=127.0.0.1';
	$user = 'specinstrument';
	$password = 'specinstrument';

	try {
	    $dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
	    echo 'Подключение не удалось: ' . $e->getMessage();
	}