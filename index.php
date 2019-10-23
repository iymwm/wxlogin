<?php
include_once("./vendor/autoload.php");
use zky\Wxlogin;
//授权登录
$appid="wxd79ad9d2a88130d3";
$appsecret="2b3b73ae5a88cc9b9954d1591500d3eb";
$Wxlogin=new Wxlogin($appid,$appsecret);
$result=$Wxlogin->get_user_all();
var_dump($result);
?>