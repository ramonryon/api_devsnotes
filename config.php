<?php

$db_name = "devsnotes";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$pdo = new PDO("mysql:dbname=$db_name;dbhost=$db_host", $db_user, $db_pass);

$array = [
    'error' => '',
    'result' => []
];
