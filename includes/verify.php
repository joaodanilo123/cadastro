<?php

global $user_error, $email_error, $passwd_error;
global $user, $email, $passwd;

if($_SERVER["REQUEST_METHOD"] == "post"){
    if(empty($_POST["user"])){
        
        $user_error = true;
    
    } else {$user = $_POST["user"];}

    if(empty($_POST["email"])){
        
        $email_error = true;
    
    } else {$email = $_POST["email"];}

    if(empty($_POST["senha"])){
        
        $passwd_error = true;
    
    } else {$user = $_POST["user"];}

}