<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
</head>
<body>
	<?php
	$config = require_once 'confing.php';

	try {
		$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
		PDO::ATTR_EMULATE_PREPARES => false, 
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]);
	} catch (PDOException $error) {
		// echo $error->getMessage();
		exit('<p style="color: red">Brak połączenia - skontaktuj się z administratorem');
		
	}
?>
</body>
</html>
