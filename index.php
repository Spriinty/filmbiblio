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
        case '/annee' :
            require __DIR__ . '/views/annee.php';
            break;
        case '/model/connexion.db' :
            require __DIR__ . '/views/home.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
}

?>
