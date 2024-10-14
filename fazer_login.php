<?php
    include "conexao.php";
    $email = $_POST['email_digitado'];
    $senha = $_POST['senha_digitada'];

    $sql = "SELECT * FROM tb_usuarios
            WHERE email='$email' AND password='$senha'";
    $consultar = $pdo->prepare($sql);

    try{
        $consultar->execute();
        $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
        if ($resultado) {
            session_start();
            $_SESSION['logado'] = 'SIM';
            header("Location: index.php");
        }else{
            header("Location: login.php?erro1=sim");
        }


    }catch(PDOException $erro){
        echo "Falha no Login!".$erro->getMessage();
    }
?>