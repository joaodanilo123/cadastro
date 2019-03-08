<?php

include 'connection_start.php';

if($_SERVER['REQUEST_METHOD'== 'POST']){
$connection = mysqli_connect(
    $server,
    $login,
    $password,
    $db
);

if (!mysqli_connect_errno()){
    echo 'Não foi possível conectar ao banco de dados';
}


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

function validarLogin($u, $s){
    global $connection;

    $query = sprintf("SELECT nome FROM usuarios WHERE nome='%s' AND senha=MD5('%s'", $u, $s);
    $result = mysqli_query($connection, $query);

    $rows = mysqli_num_rows($result);

    if($rows == 1){
        return TRUE;
    } else {
        return FALSE;
    }
}

$loginValido = validarLogin($usuario, $senha);

if($loginValido){
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
};
}