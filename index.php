<?php
var_dump($_SERVER['REQUEST_URI']);


if(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])){
    $request = $_SERVER['REQUEST_URI'];
    switch ($request) {
        case '/' :
            require __DIR__ . '/views/home.php';
            break;
        case '' :
            require __DIR__ . '/views/home.php';
            break;
        case '/about' :
            require __DIR__ . '/views/about.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
}

?>
