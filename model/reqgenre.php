<pre><?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    try {
        $base = new PDO('mysql:host=localhost; dbname=testcine', 'root', '1234');
    }
    catch(exception $e) {
        die('Erreur '.$e->getMessage());
    }
    $base->exec("SET CHARACTER SET utf8");
    
foreach ( $_POST as $genre  )  {   
    foreach($genre as $test => $val) {
        $test=$val;
        
          
      
    if(isset($test)) {
       
       
        
        $reponsefilm1 = $base->prepare("SELECT id,genre, GROUP_CONCAT(titre) AS newtitle FROM table_films INNER JOIN table_films_has_theme_genre, genre WHERE table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND genre.id=:test GROUP BY genre ORDER BY table_films.idfilm ASC");
        $reponsefilm1->bindParam(':test',$test,PDO::PARAM_STR);
        $reponsefilm1->execute();
       
        $allimagedata1 = $reponsefilm1->fetchAll();
   
        foreach ($allimagedata1 as $key) {
            if (isset($key)) {
                
                echo $key['genre'];
                
                // echo '
                // <div class="row mt-4 col-12 text-center text-white">
                //     <div class="col-3 justify-content-left">
                //         <p><input type="image" class="inpt-form-img film_cover shadow rounded img-fluid zoom"
                //             src="./media/'.$key['idfilm'].'.jpg" alt="Affiche '.$key['titre'].'" width="241" height="332"
                //             name="'.$key['idfilm'].'">
                //         </p>
                //     </div>
                //     <div class="col-9 text-left">
                //         <div><p>Titre du Film: '.$key['titre'].'</p></div>
                //         <div><p>Année de sortie: '.$key['anneesortie'].'</p></div>
                //         <div><p>Réalisateur: '.$key['realisateur'].'</p></div>
                //         <div><p>Genres: '.$key['newgenre'].'</p></div>
                //         <div><p>Résumé: '.$key['description'].'</p></div>
                //     </div>
                // </div>';
            }
        }
    }
} 
}
$base = null;
?></pre>