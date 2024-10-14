<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="caixa_login">
        <h4>Login no sistema</h4>
        <form action="fazer_login.php" method="post">
            <input type="email"
                   name="email_digitado"
                   placeholder="E-MAIL">
            <br><br>
            <input type="password"
                   name="senha_digitada"
                   placeholder="SENHA">
            <br><br>
            <?php
                echo isset($_GET['erro1'])?
                    "<div>Usuário e/ou senha <br> incorretos</div><br><br>"
                    :"";
                echo isset($_GET['erro2'])?
                    "<div>Você precisa estar <br> logado!</div><br><br>"
                    :"";
            ?>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>