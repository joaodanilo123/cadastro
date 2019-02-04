<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>cadastro</title>
</head>
<body>
    <?php

    include "includes/connection_start.php";
    
    ?>
    cadastro
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    NOME:<input type="text" name='user'><br>
    EMAIL: <input type="text" name='email'><br>
    SENHA: <input type="text" name='senha'><br>
    </form>
</body>
</html>