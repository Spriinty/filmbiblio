   <pre><?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    try {
        $base = new PDO('mysql:host=localhost; dbname=mydb', 'root', 'online@2017');
    }
    catch(exception $e) {
        die('Erreur '.$e->getMessage());
    }

    $search=$_POST['search'];
    $base->exec("SET CHARACTER SET utf8");
    // $retour = $base->query("SELECT * FROM `table_dep` WHERE `nom_maj_first` LIKE '%".$_POST['search']."%' OR `num` LIKE '%".$_POST['search']."%' OR `maj_nom_entier` LIKE '".$_POST['search']."%' OR `min_nom_entier` LIKE '%".$_POST['search']."%'");
    
    // $reponse1= $base->prepare("SELECT `titre` FROM `filmdescri` WHERE `titre` LIKE '%".$_POST['search']."%'");

    // test  ces 2 requetes sur ta base de donnée modifie la si il manque des trucs je pense que c'est un bon début

    // j'ai aussi rajouté un colone id sur la table film et celle des genre ...
    // $reponse2= $base->prepare("SELECT * FROM `filmdescri` INNER JOIN table_films_has_theme_genre ON filmdescri.id = table_films_has_theme_genre.table_films_idfilm INNER JOIN genre ON table_films_has_theme_genre.theme_genre_id_genre = genre.id");

    
    // $reponse3= $base->prepare("SELECT filmdescri.titre AS titre, filmdescri.description AS description, filmdescri.anneesortie AS annee, filmdescri.realisateur AS realisateur, genre.genre AS genre FROM `filmdescri` INNER JOIN table_films_has_theme_genre ON filmdescri.id = table_films_has_theme_genre.table_films_idfilm INNER JOIN genre ON table_films_has_theme_genre.theme_genre_id_genre = genre.id ");

//--------DB quentin-------
    $reponse1= $base->prepare("SELECT * FROM `table_films` WHERE `titre` LIKE '%".$_POST['search']."%'"); 

    // $reponse2= $base->prepare("SELECT * FROM `table_films` INNER JOIN table_films_has_theme_genre ON table_films.idfilm = table_films_has_theme_genre.table_films_idfilm INNER JOIN genre ON table_films_has_theme_genre.theme_genre_id_genre = theme_genre.id_genre");
    
    // $reponse3= $base->prepare("SELECT table_films.titre AS `titre`, table_films.description AS `description`, table_films.anneesortie AS `annee`, table_films.realisateur AS `realisateur`, table_films.genre AS `genre` FROM `table_films` INNER JOIN table_films_has_theme_genre ON table_films.idfilm = table_films_has_theme_genre.table_films_idfilm INNER JOIN `genre` ON table_films_has_theme_genre.theme_genre_id_genre = theme_genre.id_genre");


    /*--- On sélectionne tous les éléments de la table film pour un id défini dans ma table idfilm est en auto incrémentation ---*/

    $reponsefilm1 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '1'");

    $reponsefilm2 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '2'");

    $reponsefilm3 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '3'");

    $reponsefilm4 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '4'");

    $reponsefilm5 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '5'");

    $reponsefilm6 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '6'");

    $reponsefilm7 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '7'");

    $reponsefilm8 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '8'");

    $reponsefilm9 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '9'");

    $reponsefilm10 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '10'");

    $reponsefilm11 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '11'");

    $reponsefilm12 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '12'");

    //--------FIN DB quentin-------


// regarder Group_concat sur la doc SQL elle peut peut etre nous aider ?
    // GROUP_CONCAT(`genre` SEPARATOR ' ')

    $searchStart=$search."%";
    $searchMid="%".$search."%";
    $searchEnd="%".$search;

    $reponse1->bindParam(':searchStart',$searchStart, PDO::PARAM_STR);
    // $reponse2->bindParam(':searchMid',$searchMid, PDO::PARAM_STR);
    // $reponse3->bindParam(':searchEnd',$searchEnd, PDO::PARAM_STR);

    $reponse1->execute();
    // $reponse2->execute();
    // $reponse3->execute();

    /*-----IMAGES-----*/
    $reponsefilm1->execute();
    $reponsefilm2->execute();
    $reponsefilm3->execute();
    $reponsefilm4->execute();
    $reponsefilm5->execute();
    $reponsefilm6->execute();
    $reponsefilm7->execute();
    $reponsefilm8->execute();
    $reponsefilm9->execute();
    $reponsefilm10->execute();
    $reponsefilm11->execute();
    $reponsefilm12->execute();

    $allData1=$reponse1->fetchAll();
    // $allData2=$reponse2->fetchAll();
    // $allData3=$reponse3->fetchAll();

    /*-----IMAGES-----*/

    $allimagedata1 = $reponsefilm1->fetchAll();
    $allimagedata2 = $reponsefilm2->fetchAll();
    $allimagedata3 = $reponsefilm3->fetchAll();
    $allimagedata4 = $reponsefilm4->fetchAll();
    $allimagedata5 = $reponsefilm5->fetchAll();
    $allimagedata6 = $reponsefilm6->fetchAll();
    $allimagedata7 = $reponsefilm7->fetchAll();
    $allimagedata8 = $reponsefilm8->fetchAll();
    $allimagedata9 = $reponsefilm9->fetchAll();
    $allimagedata10 = $reponsefilm10->fetchAll();
    $allimagedata11 = $reponsefilm11->fetchAll();
    $allimagedata12 = $reponsefilm12->fetchAll();

    $allData = array_merge($allData1,); /*,$allData2,$allData3*/
 
    print_r ($allData1$,$allimagedata1,$allimagedata2,$allimagedata3,$allimagedata4,$allimagedata5,$allimagedata6,$allimagedata7,$allimagedata8,$allimagedata9,$allimagedata10,$allimagedata11,$allimagedata12);


   
     // var_dump(count($allData));
    //  echo json_encode($allData);
    //  var_dump($allData);
    //  print_r($allData);
    // echo json_encode( $retour->fetchAll());
        // while ($data = $retour->fetch()){
        // echo $data['COL 1'];
        // }
    $base = null;
?><pre>