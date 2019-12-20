<?php

require __DIR__.'/altorooter/AltoRouter.php';
require './vendor/autoload.php';

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
	require __DIR__ . '/views/home.php';
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

// define('VIEW_PATH', dirname(__DIR__).'/views');

// $router->map('GET', '/blog', function(){
//     require VIEW_PATH . '/post/index.php';
// });
// $router->map('GET', '/blog/category',function(){
//     require VIEW_PATH . '/category/show.php';
// });

// $match = $router->match();
// $match['target']();

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));


require(ROOT.'core/model.php');
require(ROOT.'core/controller.php');

$params=explode('/',$_GET['path']);

$controller =$params[0];
$action = isset($params[1])? $params[1]:'index';

require('controllers/'.$controller.'.php');
$controller =new $controller();
if(method_exists($controller, $action)){
    $controller->$action();
}
else{
    echo 'erreur 404';
}
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