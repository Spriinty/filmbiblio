<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="La référence du 7ème Art">
  <meta name="robots" content="all">
  <meta name="keywords"
    content="PopCorn, film, movie, critique, affiche, réalisateur, cinéma, oscar, golden globes, acteurs, actrices, salle, pellicule, recherche, annuaire, action, thriller, comedie, drame, horreur, spectacle">
  <!-- Facebook -->
  <meta property="og:locale" content="fr_FR">
  <meta property="og:url" content="#">
  <meta property="og:type" content="website">
  <meta property="og:title" content="PopCorn : Votre annuaire de film">
  <meta property="og:description" content="La référence du 7ème Art">
  <meta property="og:site_name" content="Bakery">
  <meta property="og:image" content="http://rayans.promo-vesoul33.codeur.online/annuaire-films/./media/thumbnail.jpg">
  <meta property="og:image:width" content="380">
  <meta property="og:image:height" content="380">
  <meta property="og:image:alt" content="facebook_partage">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="PopCorn : Votre annuaire de film">
  <meta name="twitter:description" content="La référence du 7ème Art">
  <meta name="twitter:site" content="https://twitter.com/PopCornMovie">
  <meta name="twitter:image" content="http://rayans.promo-vesoul33.codeur.online/annuaire-films/./medias/thumbnail.jpg">
  <meta name="twitter:creator" content="PopCorn">

  <!-- Bootstrap CSS - MyCSS - Favicons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="32x32" href="media/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="media/favicon-16x16.png">
  <link rel="stylesheet" href="style.css">
  <title>PopCorn</title>
  <favicon></favicon>
</head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Liste des Genres</title>
</head>

<body class="bg-header">

    <!-- HEADER -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand m-0 text-white htext h2 font-weight-bold" href="home.html"><span class="text-red">P</span>op<span
          class="text-red">C</span>orn<img src="media/popcorn.png" width="26" height="28" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link text-white font-weight-bold text-right" href="home.html"><span
              class="text-red">A</span>ccueil</a>
          <a class="nav-item nav-link text-white font-weight-bold text-right" href="genre.php"><span
              class="text-red">G</span>enre</a>
          <a class="nav-item nav-link text-white font-weight-bold text-right" href="page404.php"><span
              class="text-red">D</span>ate de sortie</a>
        </div>
      </div>
    </nav>
  </header>
    <!-- fin header -->
    <!-- section -->
    <section>

        <div class="container-fluid  mb-0 p-0">
            <div class="container m-auto p-5">
                <div class="row my-0">
                    <div class="col">
                        <h2 class="text-center text-white mb-5 p-5 font-weight-bold text-center">LISTE DES GENRES</h2>
                    </div>
                </div>
                <form action="" id="genre_form">
                  <div class="row m-0">
                    <!-- Action -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-1">
                            <div class="hoverfx">
                                <!-- <img class="img-responsive w-100"
        src="../media/action.png" alt="#"> -->
                                <div class="textbgbox">
                                    <h3>ACTION</h3>
                                    <input type="hidden" id="action" name="genre[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ANIMATION -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-2">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>ANIMATION</h3>
                                    <input type="hidden" id="animation" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- AVENTURE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-3">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>AVENTURE</h3>
                                    <input type="hidden" id="aventure" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BIOPIC-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-4">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>BIOPIC<h3>
                                    <input type="hidden" id="biopic" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CATASTROPHE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-5">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>CATASTROPHE<h3>
                                    <input type="hidden" id="catastrophe" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comdedie-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-6">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>COMÉDIE<h3>
                                    <input type="hidden" id="comedie" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comdedie DRAMATIQUE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-7">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>COMÉDIE DRAMATIQUE<h3>
                                    <input type="hidden" id="comediedramatique" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comdedie MUSICALE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-8">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>COMÉDIE MUSICALE<h3>
                                    <input type="hidden" id="comediemusicale" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comdedie POLICIERE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-9">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3 class="maginbottom">COMÉDIE POLICIERE<h3>
                                    <input type="hidden" id="comediepoliciere" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comdedie ROMANTIQUE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-10">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3 class="maginbottom">COMÉDIE ROMANTIQUE<h3>
                                    <input type="hidden" id="comedieromantique" name="genre[]" class="inpt-genre-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COURT METRAGE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-11">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>COURT MÉTRAGE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DESSIN ANIME-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-12">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>DESSIN ANIMÉ<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DOCUMENTAIRE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-13">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>DOCUMENTAIRE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DRAME-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100 hoverfx" id="bg-14">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>DRAME<h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DRAME PSYCHOLOGIQUE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-15">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3 class="maginbottom">DRAME PSYCHOLOGIQUE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EOUVANTE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-16">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>ÉPOUVANTE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FONTASTIQUE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-17">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>FANTASTIQUE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FILM MUSICAL-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-18">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>FILM MUSICAL<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- GUERRE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-19">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>GUERRE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HISTORIQUE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-20">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>HISTORIQUE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- HORREUR-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-21">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>HORREUR<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- POLICIER-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-22">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>POLICIER<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- POLITIQUE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-23">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>POLITIQUE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROMANCE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-24">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>ROMANCE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SCIENCE FICTION-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-25">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>SCIENCE FICTION<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SERIAL-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-26">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>SERIAL<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SPECTACLE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-27">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>SPECTACLE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TELEFILM-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-28">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>TÉLÉFILM<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- THRILLER-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-29">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>THRILLER<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- WESTERN-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-30">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>WESTERN<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- THEATRE-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-31">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>THÉÂTRE<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SPORT-->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w-100 my-3" style="padding-bottom:20px;">
                        <div class="w-100" id="bg-32">
                            <div class="hoverfx">
                                <div class="textbgbox">
                                    <h3>SPORT<h3>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </section>
<!-- fin section -->
<!-- footer -->

<footer>
    <div class="container-fluid bg-footer mt-0 p-3">
      <div class="row m-auto">
        <div class=" col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-4 text-center">
          <p><img src="../media/popcorn.png" width="28" height="30" alt="logo"></p>
        </div>
        <div class=" col-12 col-sm-12 col-md-4 col-lg-5 col-xl-5 mt-3 text-center">
          <span class="h6 font-weight-bold "> SERVICE PROPOSÉ PAR</span></br>
        <p class="h6 text-white text- m-auto font-weight-normal">Quentin Petrequin-Florent Bonneau-Chahrazed Durand-Rayan Sadki</p>
        </div>
        <div class=" col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-align-end mt-4 text-center">
          <a href="https://github.com/Gragor58/file_explorer" target="_blank">
            <img class="bg-red" src="../media/github.png"></a>
            <a href="#" target="_blank">
              <img class="bg-red" src="../media/twitter.png"></a>
              <a href="#" target="_blank"></a>
        </div>
      </div>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script>
            imganim=document.querySelector(".hoverfx")
            imganim.addEventListener('click',function(){
                console.log('tu as clické image');
                
            })
            textanim=document.querySelector(".textbgbox")
            textanim.addEventListener('click',function(){
                console.log('tu as clické text');
            })
            testInpt=document.querySelector("#testInpt")
            testInpt.addEventListener('click',function(){
                console.log('tu as clické sur linput');
            })
    //     const formGenre = document.querySelector('#genre_form');
    // console.log(formGenre);


    // // on affecte une ecoute d'évenement submit
    // formGenre.addEventListener('keyup', function (e) {

    //   //interrompre l'évenement par défaut
    //   e.preventDefault();

    //   //on selectionne la case de formulaire
    //   nameInpt = document.querySelector('#search');

    //   datas = new FormData(formGenre);

      

    //   fetch('../model/movies.php', {
    //     method: 'POST',
    //     body: datas
    //   }).then(function (theResponse) {
    //     return theResponse.text();
    //   }).then(function (result) {
    //     myDiv = document.querySelector('#reponse');
    //     myDiv.innerHTML = result
    //   })
    // })
    </script>
</body>

</html>