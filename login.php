<?php



?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf8">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/ajustes.css">
</head>
<body>
<div class="form w3-container w3-card-4 w3-round">
        <h2>Login</h2>
        <form action="" method="POST">

            <span>Username:</span><br>
            <input class='ipt w3-input w3-hover-shadow' type="text" required name='user'><br>

            <span>Password:</span> <br>
            <input class='ipt w3-input w3-hover-shadow' type="password" required name='senha'><br>


            <input class="registerBtn w3-bar w3-btn" type="submit" value="Login">
        </form>
<?php
if (isset($loginValido) and !$loginValido): ?>
        <div class="error w3-panel w3-red w3-card w3-center">
            <span>Usuário ou senha incorretos</span>
        </div>
<?php endif;?>
    </div>
</body>
</html>
