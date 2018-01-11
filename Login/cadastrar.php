<?php
session_start();
ob_start();

$cadastrar = filter_input(INPUT_POST, 'btnCadastrar', FILTER_SANITIZE_STRING);

if($cadastrar){

    include_once 'conexao.php';

    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $erro = false;

    //Retira tags
    $dados_st = array_map('strip_tags', $dados_rc);

    //Tira o espaço em branco
    $dados = array_map('trim', $dados_st);

    //Verifica se os campos estão preenchidos
    if(in_array('',$dados)){

        $erro = true;
        $_SESSION['msg'] = "<div class='alert alert-danger'>Necessarios preencher todos os campos</div>";

    //Verifica Se o campo senha contém 6 caracteres
    }elseif((strlen($dados['senha'])) < 6){

        $erro = true;
        $_SESSION['msg'] = "<div class='alert alert-danger'>Senha deve ter no minimo 6 caracteres</div>";

    //Verifica se o campo senha tem aspas simples (')
    }elseif(stristr($dados['senha'] ,"'")){

        $erro = true;
        $_SESSION['msg'] = "<div class='alert alert-danger'>O caracter (') utilizado na senha é invalido</div>";

    //Verifica se ja tem usuario com mesmo usuario
    }else{

        $query = "SELECT id FROM usuarios WHERE usuario = '".$dados['usuario']."'";
        $resultado = mysqli_query($con, $query);

        if(($resultado)AND ($resultado->num_rows != 0)){

            $erro = true;
            $_SESSION['msg'] = "<div class='alert alert-danger'>Esse usuario ja esta sendo utilizado </div>";

            //Verfica se ja tem usuario com mesmo email
        }else{

            $query = "SELECT id FROM usuarios WHERE email = '".$dados['email']."'";
            $resultado = mysqli_query($con, $query);

            if(($resultado)AND ($resultado->num_rows != 0)){

                $erro = true;
                $_SESSION['msg'] = "<div class='alert alert-danger'>Esse email ja esta sendo utilizado</div>";
            }
        }
    }


    if(!$erro){

        $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('".$dados['nome']."',
                                                                        '".$dados['email']."',
                                                                        '".$dados['usuario']."',
                                                                        '".$dados['senha']."')";

        $resultado = mysqli_query($con, $query);

        if(mysqli_insert_id($con)){

            $_SESSION['msgCad'] = "<div class='alert alert-success'>Sucesso ao Cadastrar</div>";
            header("Location: login.php");

        }else{

            $_SESSION['msgCad'] = "<div class='alert alert-danger'>Erro ao cadastrar</div>";

        }
    }

}
?>

<!DOCYTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>CADASTRAR</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/Bootstrap.css" rel="stylesheet">
    <link href="css/Login.css" rel="stylesheet" >

</head>
<body>

<div class="container">
    <div class="form-signin" style = "background: #42dea4;">
    <form method="POST" action = "">
        <h2 class="form-signin-heading">Cadastro</h2>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>

        <input type="text" name = "nome" class="form-control" placeholder="Nome" required autofocus>
        <br>

        <input type="email" name = "email" class="form-control" placeholder="Email">
        <br>

        <input type="text" name = "usuario" class="form-control" placeholder="Usuario">
        <br>

        <input type="password" id="inputEmail" name = "senha" class="form-control" placeholder="******">

        <button class="btn btn-success" type="submit" name="btnCadastrar" value="Cadastrar" >Cadastrar</button>

        <div class="row text-center" style="margin-top: 20px;">
            &nbsp&nbsp&nbspLembrou ?&nbsp <a href="login.php">  Clique aqui?&nbsp </a> para logar
        </div>

         </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>