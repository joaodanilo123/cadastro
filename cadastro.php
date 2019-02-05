<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>cadastro</title>
</head>
<body> 
    <?php

    global $user_error, $email_error, $passwd_error;
    global $user, $email, $passwd;
    
    global $ok;
    $ok = true;

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        include 'include/connection_start.php';
        
        if(empty($_POST["user"])){        
            $user_error = true;
            $ok = false;
            
        } else {$user = $_POST["user"]; echo "$user";}

        if(empty($_POST["email"])){
                
            $email_error = true;
            $ok = false;
            
        } else {$email = $_POST["email"]; echo "$email";}

        if(empty($_POST["senha"])){
                
            $passwd_error = true;
            $ok = false;
            
        } else {$passwd = $_POST["senha"];}

        if($ok){
            $query = "INSERT INTO usuarios() VALUES ('$user', '$email', '$passwd')";
            if(mysqli_query($connection, $query)){
                echo 'cadastrado com sucesso';
            }
        }

    }
        
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    NOME:<input type="text" name='user'><br>
    EMAIL: <input type="text" name='email'><br>
    SENHA: <input type="text" name='senha'><br>
    <input type="submit" value="registrar">
    </form>
    <?php 
    if ($user_error or $passwd_error or $email_error){
        echo "<span>erro no cadastro</span>";
    }  
    ?>
</body>
</html>