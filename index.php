<?php

require('AltoRooter.php');
$router = new AltoRouter();

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));


require(ROOT.'core/model.php');
require(ROOT.'core/controller.php');

$param=explode('/',$_GET['path']);
var_dump($_GET);
$controller =$param[0];
$action = $param[1];

require('controller/'.$controller.'.php');
$controller=new $controller();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>
</body>
</html>