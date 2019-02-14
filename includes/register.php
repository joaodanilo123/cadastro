<?php

    global $user_error, $email_error, $passwd_error;
    global $user, $email, $passwd;
     
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       
        global $ok;
        $ok = true;

        //verificação de username;
        if(empty($_POST["user"])){        
            $user_error = 'username requiered';
            $ok = false;
            
        } else {$user = $_POST["user"];}

        //verificção do email;
        if(empty($_POST["email"])){
            
            $email_error = 'email required';
            $ok = false;
            
        } else if (!evalid($_POST["email"])){
            
            $email_error = 'Email invalid or not supported';
            $ok = false;
        
        } else {$email = $_POST["email"];}

        //verificação de senha
        if(empty($_POST["senha1"])){
                
            $passwd_error = 'Password requiered';
            $ok = false;
            
        } elseif ($_POST["senha1"] != $_POST["senha2"]) {
            $passwd_error = 'Passwords don\'t match';
            $ok = false;
        } else {$passwd = $_POST["senha1"];}

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
                echo "não foi possivel realizar o registro";
            } else {
                echo "registro completo";
            }
            mysqli_close();
            session_abort();

        }
    }
