<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login_style.css">
    <title>Login</title>
</head>
<body>
    <a href="home.php"></a>
    <div>
        <h1>Login</h1>
        <form action="verifica_login.php" method="POST">
            <input type="text" name="email" placeholder="Email" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <input type="submit" class="inputSubmit" name="submit" value="Enviar">
            </form>
    </div>
</body>
</html>