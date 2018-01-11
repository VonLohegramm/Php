<?php
//session_start();
include_once ("face.php");
?>
<!DOCYTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/Bootstrap.css" rel="stylesheet">
        <link href="css/Login.css" rel="stylesheet" >
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="1005172902643-2mo0t1jo9pqaat2mesid5ittajgq3048.apps.googleusercontent.com">


        <title>LOGIN</title>
    </head>
    <body>

        <div class = "container">
            <div class="form-signin" style = "background: #42dea4;">


                <h1> Área restrita</h1>
                    <p id='msg'></p>
                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);
                }
                if(isset($_SESSION['msgCad'])){
                    echo $_SESSION['msgCad'];
                    unset ($_SESSION['msgCad']);
                }
                ?>

                <form method = "POST" action = "Valida.php">
                <h4>Usuario</h4>
                <input type="text" name="usuario" class="form-control"><br>

                <h4>Senha</h4>
                <input type="password" name="senha" class="form-control"><br>

                <input type="submit" name="entrar" class="btn btn-success btn-block" value="Entrar">

            <div class="text-center" style="margin-top: 20px;">

                <h4>&nbsp&nbspVocê não possui uma conta?</h4><br><p>
                <a href = "cadastrar.php">Cadastre</a>
                </p>

            </div>

                    <div class="row text-center" style="margin-top: 20px;">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <span class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="margin-top: 20px;"></span>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="<?php echo $loginUrl; ?>">
                                <button type="button" class="btn btn-primary">Facebook</button>
                            </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>


        <script src = "js/bootstrap.min.js"></script>

        <script>
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                var userID =  profile.getId();
                var userName =  profile.getName();
                var userImg =  profile.getImageUrl();
                var userEmail =  profile.getEmail();
                var userToken =  googleUser.getAuthResponse().id_token;
                document.getElementById('msg').innerHTML = userEmail;
                if(userName !== ''){
                    var dados = {
                        userID: userID,
                        userName: userName,
                        userImg: userImg,
                        userEmail: userEmail
                    };
                    $.post('validaGoogle.php', dados, function(retorna){
                        if(retorna === '"erro"'){
                            var msg = "usuario nao encontrado";
                            document.getElementById('msg').innerHTML = msg;
                        }else{
                            window.location.href = retorna;
                        }
                    });
                }else{
                    var msg = "Usuario nao encontrado";
                    document.getElementById('msg').innerHTML = msg;
                }

            }

        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>

</html>