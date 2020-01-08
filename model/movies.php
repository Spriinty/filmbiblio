<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    try {
<<<<<<< HEAD
        $base = new PDO('mysql:host=localhost; dbname=testcine', 'root', 'online@2017');
        // $base = new PDO('mysql:host=localhost; dbname=quentinp364_testcine', 'quentinp364', '6FbZ1+ZEyQH72A==');
=======
        $base = new PDO('mysql:host=localhost; dbname=testcine', 'root', '1234');
>>>>>>> dc21c4fe067befbe57e5cbf2e80e5bc78a45aaa5
    }
    catch(exception $e) {
        die('Erreur '.$e->getMessage());
    }
    $base->exec("SET CHARACTER SET utf8");

    if(isset($_POST['search']) && $_POST['search']!='') {
        $search=$_POST['search'];

    $reponse1= $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `titre` LIKE '%:search%' GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
    $reponse1->bindParam(':search',$search,PDO::PARAM_STR);
    $reponse1->execute();
    $allData1=$reponse1->fetchAll();
        foreach ($allData1 as $key) {
            if (isset($key)) {
                echo '
                <div class="row mt-4 col-12 text-center text-white">
                    <div class="col-3 justify-content-left">
                        <p><input type="image" class="inpt-form-img film_cover shadow rounded img-fluid zoom"
                            src="./views/media/'.$key['idfilm'].'.jpg" alt="Affiche '.$key['titre'].'" width="241" height="332"
                            name="'.$key['idfilm'].'">
                        </p>
                    </div>
                    <div class="col-9 text-left">
                        <div><p>Titre du Film: '.$key['titre'].'</p></div>
                        <div><p>Année de sortie: '.$key['anneesortie'].'</p></div>
                        <div><p>Réalisateur: '.$key['realisateur'].'</p></div>
                        <div><p>Genres: '.$key['newgenre'].'</p></div>
                        <div><p>Résumé: '.$key['description'].'</p></div>
                    </div>
                </div>';
                // echo  '<style>.formulairedisplay { display:none;}</style>';
                // echo  '<style>.formulairedisplay { display:block;}</style>';
            }
        }
    }
    foreach ( $_POST as $post => $val )  {            
        $post = $val;   
    if(isset($post)) {
        
        $reponsefilm1 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=:post GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        $reponsefilm1->bindParam(':post',$post,PDO::PARAM_STR);
        $reponsefilm1->execute();
        $allimagedata1 = $reponsefilm1->fetchAll();
        foreach ($allimagedata1 as $key) {
            if (isset($key)) {
                echo '
                <div class="row mt-4 col-12 text-center text-white">
                    <div class="col-3 justify-content-left">
                        <p><input type="image" class="inpt-form-img film_cover shadow rounded img-fluid zoom"
                            src="./views/media/'.$key['idfilm'].'.jpg" alt="Affiche '.$key['titre'].'" width="241" height="332"
                            name="'.$key['idfilm'].'">
                        </p>
                    </div>
                    <div class="col-9 text-left">
                        <div><p>Titre du Film: '.$key['titre'].'</p></div>
                        <div><p>Année de sortie: '.$key['anneesortie'].'</p></div>
                        <div><p>Réalisateur: '.$key['realisateur'].'</p></div>
                        <div><p>Genres: '.$key['newgenre'].'</p></div>
                        <div><p>Résumé: '.$key['description'].'</p></div>
                    </div>
                </div>';
            }
        }
    }
}

    $base = null;
?>