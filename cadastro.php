<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>cadastro</title>
</head>
<body> 
    <?php
    
    include "includes/verify.php";
    
    
    ?>
    cadastro
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    NOME:<input type="text" name='user'><br>
    EMAIL: <input type="text" name='email'><br>
    SENHA: <input type="text" name='senha'><br>
    <?php 
    if($email_error || $user_error || $passwd_error){
        echo "<span>ERRO NO CADASTRO<span>";
    }
    ?>
    </form>
</body>
</html>