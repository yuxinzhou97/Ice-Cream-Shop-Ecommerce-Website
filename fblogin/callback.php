<?php
require_once("/home3/theyuxin/public_html/fblogin/config.php");

try {
    $accessToken = $handler->getAccessToken();
}catch(Facebook\Exceptions\FacebookResponseException $e){
    echo "Response Exception: " . $e->getMessage();
    exit();
}catch(Facebook\Exceptions\FacebookSDKException $e){
    echo "SDK Exception: " . $e->getMessage();
    exit();
}

if(!$accessToken){
    header('Location: https://theyuxinzhou.com/fblogin/login.php');
    exit();
}

$oAuth2Client = $FBObject->getOAuth2Client();
if(!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccesToken($accessToken);

    $response = $FBObject->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
    $userData = $response->getGraphNode()->asArray();
    $_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;
    header('Location: https://theyuxinzhou.com/fblogin/index.php');
    exit();
?>