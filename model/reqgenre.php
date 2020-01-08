<pre><?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    try {
<<<<<<< HEAD
        $base = new PDO('mysql:host=localhost; dbname=quentinp364_testcine', 'quentinp364', '6FbZ1+ZEyQH72A==');
=======
        $base = new PDO('mysql:host=localhost; dbname=testcine', 'florentb', 'lybc65dR3yq6jw==');

>>>>>>> dc21c4fe067befbe57e5cbf2e80e5bc78a45aaa5
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
                    
                    echo '<div class="container-fluid">
                    <div class="container">
                        <div class="row">
                        <form action="">
                    <div class="container-fluid pt-5 pb-5 text-center ">
                    <div class="container mt-5">
                        <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <h2 class="text-white text-center font-weight-bold mb-3">'.$key['genre'].'</h2>
                        </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center ">
                        <div class="col-12 col-sm-5 col-md-3 col-lg-3 col-xl-3 text-center formulairedisplay">
                          <h4 class="text-white">'.$key['newtitle'].'</4>
                          </div></div>
                        ';
                    
                    
                    
                }
            }
        }
    } 
}
$base = null;
?></pre>