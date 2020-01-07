<?php
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
// for ($i=1; $i <13 ; $i++) { 
//     var_dump($_POST[$i]);
//     echo $i;
// }

    if (isset($_POST['search']) && $_POST['search']!='') {
        $search=$_POST['search'];
        
        $reponse1= $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `titre` LIKE '%".$_POST['search']."%' GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        $searchStart=$search."%";
        $searchMid="%".$search."%";
        $searchEnd="%".$search;
        $reponse1->bindParam(':searchStart',$searchStart, PDO::PARAM_STR);
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
    } elseif(isset($_POST['1'])) {
        $reponsefilm1 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=1 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
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
    } elseif(isset($_POST['2'])) {
        $reponsefilm2 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=2 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm2->execute();
        $allimagedata2 = $reponsefilm2->fetchAll();
        foreach ($allimagedata2 as $key) {
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
    }elseif(isset($_POST['3'])) {

        
        $reponsefilm3 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=3 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm3->execute();
        $allimagedata3 = $reponsefilm3->fetchAll();
        foreach ($allimagedata3 as $key) {
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
    } elseif(isset($_POST['4'])) {
        $reponsefilm4 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=4 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm4->execute();
        $allimagedata4 = $reponsefilm4->fetchAll();
        foreach ($allimagedata4 as $key) {
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
    }elseif(isset($_POST['5'])) {

        
        $reponsefilm5 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=5 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm5->execute();
        $allimagedata5 = $reponsefilm5->fetchAll();
        foreach ($allimagedata5 as $key) {
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
    } elseif(isset($_POST['6'])) {
        $reponsefilm6 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=6 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm6->execute();
        $allimagedata6 = $reponsefilm6->fetchAll();
        foreach ($allimagedata6 as $key) {
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
    }elseif(isset($_POST['7'])) {

        
        $reponsefilm7 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=7 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm7->execute();
        $allimagedata7 = $reponsefilm7->fetchAll();
        foreach ($allimagedata7 as $key) {
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
    } elseif(isset($_POST['8'])) {
        $reponsefilm8 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=8 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm8->execute();
        $allimagedata8 = $reponsefilm8->fetchAll();
        foreach ($allimagedata8 as $key) {
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
    }elseif(isset($_POST['9'])) {

        
        $reponsefilm9 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=9 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm9->execute();
        $allimagedata9 = $reponsefilm9->fetchAll();
        foreach ($allimagedata9 as $key) {
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
    } elseif(isset($_POST['10'])) {
        $reponsefilm10 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=10 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm10->execute();
        $allimagedata10 = $reponsefilm10->fetchAll();
        foreach ($allimagedata10 as $key) {
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
    }elseif(isset($_POST['11'])) {

        
        $reponsefilm11 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=11 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm11->execute();
        $allimagedata11 = $reponsefilm11->fetchAll();
        foreach ($allimagedata11 as $key) {
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
    } elseif(isset($_POST['12'])) {
        $reponsefilm12 = $base->prepare("SELECT`titre`,`description`, `anneesortie`, `realisateur`, `idfilm`, GROUP_CONCAT(`genre`) AS newgenre FROM  `table_films` INNER JOIN table_films_has_theme_genre, genre WHERE     table_films.idfilm = table_films_has_theme_genre.table_films_idfilm AND table_films_has_theme_genre.theme_genre_id_genre = genre.id AND `idfilm`=12 GROUP BY titre ORDER BY `table_films`.`idfilm`  ASC");
        
        $reponsefilm12->execute();
        $allimagedata12 = $reponsefilm12->fetchAll();
        foreach ($allimagedata12 as $key) {
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