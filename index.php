<?php

if(!empty($_GET['page']) AND !empty($_GET['s']))
{
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];       
    $decoupe = explode("&", $url);
    $redirection_page_prec = $decoupe[0].'&page='. ($pageActuelle-1);
    $redirection_page_suiv = $decoupe[0].'&page='. ($pageActuelle+1);      
}
else
{
    $redirection_page_prec = "".$url."&page=".($pageActuelle-1)."";
    $redirection_page_suiv = "".$url."&page=".($pageActuelle+1)."";    
}

// $url = '';
// if(isset($_GET['url'])) {
//     $url = $_GET['url'];
// }

// if($url == '') {
//     require 'home.php';
// } elseif(preg_match('#article-([0-9]+)#', $url, $params)) {
//     $idArticle = $params[1];
//     require 'article.php';
// } else {
//     require '404.php';
// }

/*$url = '';
if(isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}

if($url == '') {
    require 'home.php';
} elseif($url[0] == 'article' AND !empty($url[1])) {
    $idArticle = $url[1];
    require 'article.php';
} else {
    require '404.php';
}*/