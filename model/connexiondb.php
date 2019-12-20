<?php 

try {
  $base = new PDO('mysql:host=localhost; dbname=mydb', 'root', 'online@2017');
}
catch(exception $e) {
  die('Erreur'.$e->getMessage());
}

$films = $base->query('SELECT * FROM `table_films`');
$genre = $base->query('SELECT * FROM `theme_genre`'); 

SELECT * FROM TABLE1 INNER JOIN TABLE3 WHERE TABLE 1.id = TABLE 2.id

?>