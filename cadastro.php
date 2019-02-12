<?php 
session_start();

include 'includes/connection_start.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/main.css">
    <title>cadastro</title>
</head>
<body> 
    <?php

    global $user_error, $email_error, $passwd_error;
    global $user, $email, $passwd;
    
    global $ok;
    $ok = true;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
       
        if(empty($_POST["user"])){        
            $user_error = true;
            $ok = false;
            
        } else {$user = $_POST["user"];}

        if(empty($_POST["email"])){
                
            $email_error = true;
            $ok = false;
            
        } else {$email = $_POST["email"];}

        if(empty($_POST["senha"])){
                
            $passwd_error = true;
            $ok = false;
            
        } else {$passwd = $_POST["senha"];}

        if($ok){

            $connection = mysqli_connect(
                $_SESSION['server'],
                $_SESSION['login'],
                $_SESSION['password'],
                $_SESSION['db']
            );
            $query = "INSERT INTO usuarios() VALUES ('$user', '$email', '$passwd')";
            $releaseQuery = mysqli_query($connection, $query);
            if(!$releaseQuery){
                echo "erro";
            } else {
                echo "query ok";
            }
        }

    }
        
    ?>
    <div class="form">
    <h2>CADASTRO</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <span>Nome: </span> <br> <input class='ipt' type="text" name='user'>      <br>
    <span>Email:</span> <br> <input class='ipt' type="text" name='email'>     <br>
    <span>Senha:</span> <br> <input class='ipt' type="password" name='senha'> <br>
    Confirme a Senha:<br> <input class='ipt' type="password" name='senha'>    <br>
    <input type="submit" value="registrar">
    </form>
    <?php 
    if ($user_error or $passwd_error or $email_error){
        echo "<span>erro no cadastro</span>";
    }  
    ?>
    </div>
</body>
</html>