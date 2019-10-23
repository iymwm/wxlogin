<?php
include_once("./vendor/autoload.php");
use zky\Wxlogin;
//授权登录
$appid="";
$appsecret="";
$Wxlogin=new Wxlogin($appid,$appsecret);
$result=$Wxlogin->get_user_all();
var_dump($result);
?>