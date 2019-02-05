<?php
session_start();

$host = 'localhost';
$login = 'root';
$password = 'joojdanilo01';
$db = 'cadastro';
$port = '3306';

$connection = mysqli_connect($host, $login, $password, $db, $port);
if(connection_errno()){
    echo "erro na conexão";
}