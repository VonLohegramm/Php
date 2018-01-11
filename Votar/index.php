<?php
session_start();

include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sorteio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/personalizar.css">
    <link rel="icon" href="Imagem/ico.ico" type="image/x-icon" />
    <meta charset="utf-8">
</head>
<body>
<div class="container">
    <h1>Listar</h1>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'] . "<br><br>";
        unset($_SESSION['msg']);
    }
    ?>
    <div class="row">
        <?php
        //Pesquisa do produtos
        $query = "SELECT * FROM produtos";
        $resultado = mysqli_query($conn, $query);

        while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="col-sm-6 col-md-4">
                <div class="img-thumbnail">
                    <div class="caption">
                        <p style = "padding-top: 70px;">

                        </p>
                    </div>
                    <img src="imagem/<?php echo $linha['imagem']; ?>" width = "340px" height="230px">
                </div>
                <div class="descricao">
                    </br>
                    <a href="votos.php?id=<?php echo $linha['id']; ?>" class = "btn btn-success">
                        Votar

                    </a>

                    <h3> </br> <?php echo $linha['nome']; ?></h3>

                    <h4> </br><?php echo $linha['quantidade']; ?></h4>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/personalizar.js"></script>
</body>
</html>