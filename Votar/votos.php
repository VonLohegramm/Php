<?php
session_start();

include_once("conexao.php");

//Verificar url

if(isset($_GET['id'])){
    if(isset($_COOKIE['conta'])){

        $_SESSION['msg'] = "<div class ='alert alert-danger'>Você ja votou!!</div>";
        header("Location: index.php");

    }else {

        setcookie('conta', $_SERVER['REMOTE_ADDR'], time() +5);
        $query = "UPDATE produtos SET quantidade = quantidade +1 WHERE id = '" . $_GET['id'] . "' ";
        $resultado = mysqli_query($conn, $query);

        if (mysqli_affected_rows($conn)) {
            $_SESSION['msg'] = "<div class ='alert alert-success'>Voto recebido com sucesso</div>";
            header("Location: index.php");
        } else {
            $_SESSION['msg'] = "<div class ='alert alert-danger'>Erro na votação</div>";
            header("Location: index.php");
        }
    }
}