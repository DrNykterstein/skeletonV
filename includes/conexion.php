<?php
// Declaro los parametros necesarios para conectarme a la base de datos
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';

// con mysql connect, aunque tambien pudiera usar PDO
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");