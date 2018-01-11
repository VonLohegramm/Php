<?php
    include("conexao.php");
    $pdo=conectar();

    $suporte = $_POST["suporte"];
    $preco = $_POST["preco"];

    try{
        $ins=
        "INSERT INTO orcamentos (licenca,tipoSuporte)
        VALUES ('$preco','$suporte')";

        $exec = $pdo->exec($ins);       

        echo "Sua mãe foi enviada com sucesso!!!";
        
        echo<<<HTML
        <a href="index.php">Deseja Voltar?</a>
HTML;

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

?>