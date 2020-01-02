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
    $search=$_POST['search'];
    $base->exec("SET CHARACTER SET utf8");
    // $retour = $base->query("SELECT * FROM `table_dep` WHERE `nom_maj_first` LIKE '%".$_POST['search']."%' OR `num` LIKE '%".$_POST['search']."%' OR `maj_nom_entier` LIKE '".$_POST['search']."%' OR `min_nom_entier` LIKE '%".$_POST['search']."%'");
    
    $reponse1= $base->prepare("SELECT * FROM `filmdescri` WHERE `COL 1` LIKE '%".$_POST['search']."%'");

    $reponse2= $base->prepare("SELECT * FROM `table_dep` WHERE `nom_maj_first` LIKE '%".$_POST['search']."%' OR `num` LIKE '%".$_POST['search']."%' OR `maj_nom_entier` LIKE '".$_POST['search']."%' OR `min_nom_entier` LIKE '%".$_POST['search']."%'");
    $reponse3= $base->prepare("SELECT * FROM `table_dep` WHERE `nom_maj_first` LIKE '%".$_POST['search']."%' OR `num` LIKE '%".$_POST['search']."%' OR `maj_nom_entier` LIKE '".$_POST['search']."%' OR `min_nom_entier` LIKE '%".$_POST['search']."%'");

    $searchStart=$search."%";
    $searchMid="%".$search."%";
    $searchEnd="%".$search;

    $reponse1->bindParam(':searchStart',$searchStart, PDO::PARAM_STR);
    $reponse2->bindParam(':searchMid',$searchMid, PDO::PARAM_STR);
    $reponse3->bindParam(':searchEnd',$searchEnd, PDO::PARAM_STR);

    $reponse1->execute();
    $reponse2->execute();
    $reponse3->execute();

    $allData1=$reponse1->fetchAll();
    $allData2=$reponse2->fetchAll();
    $allData3=$reponse3->fetchAll();

    $allData = array_merge($allData1,$allData2,$allData3);
 
    print_r ($allData);
   
     // var_dump(count($allData));
    //  echo json_encode($allData);
    //  var_dump($allData);
    //  print_r($allData);
    // echo json_encode( $retour->fetchAll());
        // while ($data = $retour->fetch()){
        // echo $data['COL 1'];
        // }
        $base = null;
?> <pre>