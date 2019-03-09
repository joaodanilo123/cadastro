<?php

$server = 'localhost';
$login = 'root';
$password = 'joojdanilo01';
$db= 'sistema';

$connection = mysqli_connect(
    $server,
    $login,
    $password,
    $db
) or die();