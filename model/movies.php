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

    if (isset($_POST['search']) && $_POST['search']!='') {
        $search=$_POST['search'];

        $reponse1= $base->prepare("SELECT `idfilm`,`titre`,`description`,`anneesortie`,`realisateur` FROM `table_films` WHERE `titre` LIKE '%".$search."%'");

        $searchStart=$search."%";
        $searchMid="%".$search."%";
        $searchEnd="%".$search;
        $reponse1->bindParam(':searchStart',$searchStart, PDO::PARAM_STR);
        $reponse1->execute();
        $allData1=$reponse1->fetchAll();
        foreach ($allData1 as $key) {
            if (isset($key)) {
                
                echo '<div class="col-12 col-sm-3 col-md-3 col-lg-2 text-center">
                <p><a href="#"><input type="image" class="inpt-form-img film_cover shadow rounded img-fluid zoom"
                      src="./media/'.$key['idfilm'].'.jpg" alt="Affiche Chicken Run" width="241" height="332"
                      name="$key"></a>
                </p>
              </div>';
              
            }
        }   
    } 
    
    elseif(isset($_POST['suicidesquad'])) {

        
        $reponsefilm1 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '1'");
        
        $reponsefilm1->execute();
        $allimagedata1 = $reponsefilm1->fetchAll();
        foreach ($allimagedata1 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    } elseif(isset($_POST['diversionimage'])) {
        $reponsefilm2 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '2'");
        
        $reponsefilm2->execute();
        $allimagedata2 = $reponsefilm2->fetchAll();
        foreach ($allimagedata2 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    }elseif(isset($_POST['instinctimage'])) {

        
        $reponsefilm3 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '3'");
        
        $reponsefilm3->execute();
        $allimagedata3 = $reponsefilm3->fetchAll();
        foreach ($allimagedata3 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    } elseif(isset($_POST['shaolinimage'])) {
        $reponsefilm4 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '4'");
        
        $reponsefilm4->execute();
        $allimagedata4 = $reponsefilm4->fetchAll();
        foreach ($allimagedata4 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    }elseif(isset($_POST['chtisimage'])) {

        
        $reponsefilm5 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '5'");
        
        $reponsefilm5->execute();
        $allimagedata5 = $reponsefilm5->fetchAll();
        foreach ($allimagedata5 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    } elseif(isset($_POST['chickenimage'])) {
        $reponsefilm6 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '6'");
        
        $reponsefilm6->execute();
        $allimagedata6 = $reponsefilm6->fetchAll();
        foreach ($allimagedata6 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    }elseif(isset($_POST['mansimage'])) {

        
        $reponsefilm7 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '7'");
        
        $reponsefilm7->execute();
        $allimagedata7 = $reponsefilm7->fetchAll();
        foreach ($allimagedata7 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    } elseif(isset($_POST['rushimage'])) {
        $reponsefilm8 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '8'");
        
        $reponsefilm8->execute();
        $allimagedata8 = $reponsefilm8->fetchAll();
        foreach ($allimagedata8 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    }elseif(isset($_POST['driveimage'])) {

        
        $reponsefilm9 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '9'");
        
        $reponsefilm9->execute();
        $allimagedata9 = $reponsefilm9->fetchAll();
        foreach ($allimagedata9 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    } elseif(isset($_POST['whiplashimage'])) {
        $reponsefilm10 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '10'");
        
        $reponsefilm10->execute();
        $allimagedata10 = $reponsefilm10->fetchAll();
        foreach ($allimagedata10 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    }elseif(isset($_POST['getoutimage'])) {

        
        $reponsefilm11 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '11'");
        
        $reponsefilm11->execute();
        $allimagedata11 = $reponsefilm11->fetchAll();
        foreach ($allimagedata11 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    } elseif(isset($_POST['parasiteimage'])) {
        $reponsefilm12 = $base->prepare("SELECT * FROM `table_films` WHERE idfilm = '12'");
        
        $reponsefilm12->execute();
        $allimagedata12 = $reponsefilm12->fetchAll();
        foreach ($allimagedata12 as $key) {
            if (isset($key)) {
                echo $key['titre'] ;
            }
        }
    }else {
        echo "rien";
    }
 
    $base = null;
?><pre>