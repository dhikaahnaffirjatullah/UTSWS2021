<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'mahasiswa');

$db_connect = mysqli_connect (HOST,USER,PASS,DB) or diw ('unable connect');
header('Content-Type: application/json');
?>