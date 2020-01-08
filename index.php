<?php
// var_dump($_SERVER['REQUEST_URI']);


if(isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])){
    $request = $_SERVER['REQUEST_URI'];
    

    switch ($request) {
        case '/' :
            require __DIR__ . '/views/home.html';
            break;
        case '' :
            require __DIR__ . '/views/home.html';
            break;
        case '/views':
            require __DIR__ . '/views/home.html';
            break;
        case '/views/movies.php':
            require __DIR__ . '/views/home.html';
        break;
        case '/views/reqgenre.php':
            require __DIR__ . '/views/home.html';
        break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/page404.php';
            break;
    }
}

?>
