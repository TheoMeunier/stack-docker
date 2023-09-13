<?php

require_once "./tools/write_env.php";

$pdo = new PDO("mysql:dbname=".$_ENV["DB_DATABASE"].";host=".$_ENV["DB_HOST"],$_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"]);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);