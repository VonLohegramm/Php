<?php
session_start();
include_once ("conexao.php");
$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
$query = "SELECT * FROM  usuarios WHERE email = '$email' LIMIT 1";
$resultado = mysqli_query($con, $query);

if(($resultado) AND ($resultado ->num_rows != 0)){
    $row =  mysqli_fetch_assoc($resultado);
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);

    $_SESSION['id'] = $row['id'];
    $_SESSION['nome'] = $row['nome'];
    $result = 'administrativo.php';
    echo $result;
}else{
    $result = 'erro';
    echo(json_encode($result));
}
