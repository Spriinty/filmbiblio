<?php

require('AltoRooter.php');
$router = new AltoRouter();

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));


require(ROOT.'core/model.php');
require(ROOT.'core/controller.php');

$param=explode('/',$_GET['p']);
print_r($param);

echo ROOT;
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