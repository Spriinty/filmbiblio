<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    try {
        $base = new PDO('mysql:host=localhost; dbname=testcine', 'root', 'online@2017');
    }
    catch(exception $e) {
        die('Erreur '.$e->getMessage());
    }
    $base->exec("SET CHARACTER SET utf8");

    if (isset($_POST['search']) && $_POST['search']!='') {
        

    $reponse1= $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `titre` LIKE '%".$_POST['search']."%' GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
    // $searchStart=$search."%";
    // $searchMid="%".$search."%";
    // $searchEnd="%".$search;
    // $reponse1->bindParam(':searchStart',$searchStart, PDO::PARAM_STR);
    $reponse1->execute();
    $allData1=$reponse1->fetchAll();
        foreach ($allData1 as $key) {
            if (isset($key)) {
                echo '
                <div class="row mt-4 col-12 text-center text-white">
                    <div class="col-3 justify-content-left">
                        <p><input type="image" class="inpt-form-img film_cover shadow rounded img-fluid zoom"
                            src="./media/'.$key['idfilm'].'.jpg" alt="Affiche '.$key['titre'].'" width="241" height="332"
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
                echo  '<style>.formulairedisplay { display:none;}</style>';
            }
        }
    }else{
        echo  '<style>.formulairedisplay { display:block;}</style>';
    } 
    foreach ( $_POST as $post => $val )  {            
        $post = $val;   
    if(isset($_POST)) {
        
        
        $reponsefilm1 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=$post GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm1->execute();
        $allimagedata1 = $reponsefilm1->fetchAll();
        foreach ($allimagedata1 as $key) {
            if (isset($key)) {
                echo '
                <div class="row mt-4 col-12 text-center text-white">
                    <div class="col-3 justify-content-left">
                        <p><input type="image" class="inpt-form-img film_cover shadow rounded img-fluid zoom"
                            src="./media/'.$key['idfilm'].'.jpg" alt="Affiche '.$key['titre'].'" width="241" height="332"
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
   
    // if(isset($_POST['12'])) {
    //     $reponsefilm12 = $base->prepare("SELECT `genre`, GROUP_CONCAT(`titre`) AS newtitle FROM `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id  GROUP BY genre ORDER BY `table_films`.`idfilm` ASC");
        
    //     $reponsefilm12->execute();
    //     $allimagedata12 = $reponsefilm12->fetchAll();
    //     foreach ($allimagedata12 as $key) {
    //         if (isset($key)) {
    //             echo '
    //             <div class="row mt-4 col-12 text-center text-white">
    //                 <div class="col-3 justify-content-left">
    //                     <p><input type="image" class="inpt-form-img film_cover shadow rounded img-fluid zoom"
    //                         src="./media/'.$key['idfilm'].'.jpg" alt="Affiche '.$key['titre'].'" width="241" height="332"
    //                         name="'.$key['idfilm'].'">
    //                     </p>
    //                 </div>
    //                 <div class="col-9 text-left">
    //                     <div><p>Titre du Film: '.$key['titre'].'</p></div>
    //                     <div><p>Année de sortie: '.$key['anneesortie'].'</p></div>
    //                     <div><p>Réalisateur: '.$key['realisateur'].'</p></div>
    //                     <div><p>Genres: '.$key['newgenre'].'</p></div>
    //                     <div><p>Résumé: '.$key['description'].'</p></div>
    //                 </div>
    //             </div>';
    //         }
    //     }
    // }
    
 // SELECT * FROM `table_films` INNER JOIN table_films_has_theme_genre,genre WHERE table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre=genre.id
// SELECT `idfilm`,`titre`,`description`,`anneesortie`,`realisateur` FROM `table_films` WHERE `titre` LIKE '%".$search."%'

    $base = null;
?>