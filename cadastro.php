<?php 
session_start();

include 'includes/connection_start.php';
include 'includes/email_validator.php';
include 'includes/register.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/main.css">
    <title>Cadastro</title>
</head>
<body> 
    <div class="form">
        <h2>SIGN UP</h2>
        <form 
        action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="POST">
        
        <span>Username:</span><br> 
            <input class='ipt' type="text" name='user'><br>
        
        <span>Email:</span><br> 
            <input class='ipt' type="text" name='email'>      <br>
        
        <span>Password:</span> <br> 
            <input class='ipt' type="password" name='senha1'> <br>
        
        <span>Confirm password:</span><br>    
            <input class='ipt' type="password" name='senha2'> <br>
        
        <input type="submit" value="SIGN UP">
    </form>
    
    <span class="error">
    <?php 
        echo $user_error . '<br>'.$passwd_error . '<br>'.$email_error . '<br>';
    ?>
    </span>
    </div>
</body>
</html>