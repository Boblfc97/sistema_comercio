<?php
    include "conexao.php";
    $nome = $_POST['nome_digitado'];
    $preco = $_POST['preco_digitado'];
    $cat = $_POST['categoria_escolhida'];
    $foto = $_POST['foto_escolhida'];
    $qtd = $_POST['estoque_digitado'];

    $sql = "INSERT INTO tb_produtos
            (nome_produto, preco, estoque, categoria, imagem) VALUES
            ('$nome', '$preco', '$qtd','$cat', '$foto')";

    $inserir = $pdo->prepare($sql);

    try{
        $inserir->execute();
        header("Location:pg_gerenciar.php?inserir=OK");
    }catch(PDOException $erro){
        echo "Falha ao Cadastrar! ".$erro->getMessage();
    }
?>