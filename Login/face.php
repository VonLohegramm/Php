<?php
session_start();
//unset($_SESSION['token']);
include_once ("conexao.php");
require_once 'lib/Facebook/autoload.php';
$fb = new \Facebook\Facebook([
    'app_id' => '384974288618644',
    'app_secret' => '65f71e423c9e04593b8b1436e53990d0',
    'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // optional
]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions

try {
    if(isset($_SESSION['token'])){

        $accessToken = $_SESSION['token'];

    }else{

        $accessToken = $helper->getAccessToken();
    }


} catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (! isset($accessToken)) {
    $url_login = "http://localhost/Login/face.php";
    $loginUrl = $helper->getLoginUrl($url_login, $permissions);
}else{
    $url_login = "http://localhost/Login/face.php";
    $loginUrl = $helper->getLoginUrl($url_login, $permissions);
    //Verfica

    if(isset($_SESSION['token'])){
        $fb->setDefaultAccessToken($_SESSION['token']);
    }else{
        $_SESSION['token'] = (string) $accessToken;
        $oAuth2Client = $fb->getOAuth2Client();
        $_SESSION['token'] = (string) $oAuth2Client->getLongLivedAccessToken($_SESSION['token']);
        $fb->setDefaultAccessToken($_SESSION['token']);
    }
    try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $fb->get('/me?fields=name, picture, email');
        $user = $response->getGraphUser();
        var_dump($user);

        $result_usuario = "SELECT id, nome, email FROM usuarios WHERE email='".$user['email']."' LIMIT 1";
        $resultado_usuario = mysqli_query($con, $result_usuario);

        if($resultado_usuario){

            $row_usuario = mysqli_fetch_assoc($resultado_usuario);

                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];
                header("Location: administrativo.php");

        }

    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

}
?>

