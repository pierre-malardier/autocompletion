<?php
$dsn = 'mysql:dbname=autocompletion;host=localhost';
$username = 'root';
$pass = '';

$db = new PDO($dsn, $username, $pass);
$db->exec("set names utf8");
