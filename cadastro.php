<?php
session_start();

include 'includes/connection_start.php';
include 'includes/email_validator.php';
include 'includes/register.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/resetstyle.css">
    <link rel="stylesheet" href="../w3.css">
    <link rel="stylesheet" href="style/ajustes.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="form w3-container w3-card-4">
        <h2>SIGN UP</h2>
        <form action="" method="POST">

            <span>Username:</span><br>
            <input class='ipt w3-input w3-hover-shadow' type="text" required name='user'><br>

            <span>Email:</span><br>
            <input class='ipt w3-input w3-hover-shadow' type="text" required name='email'><br>

            <span>Password:</span> <br>
            <input class='ipt w3-input w3-hover-shadow' type="password" required name='senha1'><br>

            <span>Confirm password:</span><br>
            <input class='ipt w3-input w3-hover-shadow' type="password" required name='senha2'><br>

            <input class="registerBtn w3-bar w3-btn" type="submit" value="SIGN UP">
        </form>
<?php
if(!$ok):?>
        <div class="error w3-panel w3-red w3-card w3-center">
            <?php echo $user_error . "<br>" . $email_error . "<br>" . $passwd_error; ?>
        </div>
<?php endif;?>
    </div>
</body>
</html>