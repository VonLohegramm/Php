<?php
    include("conexao.php");
    $pdo=conectar();

    $email = $_POST["email"];
    $senha = $_POST["senha"];
/* by renan pica dura*/
    try{
        $ins=
        "INSERT INTO loginn (senha,email)
        VALUES (ENCODE('$senha', 'gay'),'$email')";

        $exec = $pdo->exec($ins);       

        echo "Enviado com Sucesso!!!";
        
        echo<<<HTML
        <a href="index.php">Deseja Voltar?</a>
HTML;

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>