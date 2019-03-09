<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    global $connection;

    if (mysqli_connect_errno()) {
        echo sprintf('Não foi possível conectar ao banco de dados: %s', mysqli_connect_error());
    } else {

        $usuario = $_POST['user'];
        $senha = $_POST['senha'];

        function validarLogin($u, $s)
        {
            global $connection;

            $query = sprintf("SELECT nome FROM usuarios WHERE nome='%s' AND senha=MD5('%s')", $u, $s);
            $result = mysqli_query($connection, $query);

            $rows = mysqli_num_rows($result);

            if ($rows == 1) {
                return true;
            } else {
                return false;
            }
        }

        $loginValido = validarLogin($usuario, $senha);

        if ($loginValido) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: painel.php');
        }
    }
}
