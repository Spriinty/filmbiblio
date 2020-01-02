<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>
    <form action="" id="form">
    <input type="search" name="search" id="search">
    <button type="submit">Suicide Squad</button>
    <button type="submit">Diversion</button>
    <button type="submit">Instinct de survie</button>
    <button type="submit">Shaolin</button>
    <button type="submit">Bievenue chez les Ch'tis</button>
    <button type="submit">Chicken Run</button>
    <button type="submit">Le Mans 66</button>
    <button type="submit">Rush</button>
    <button type="submit">Drive</button>
    <button type="submit">Whiplash</button>
    <button type="submit">Get Out</button>
    <button type="submit">Parasite</button>
    
    </form>
    <div id="reponse"></div>

<script>
    // on selectionne le formulaire
    const myForm = document.querySelector('#form');


    // on affecte une ecoute d'évenement submit
    myForm.addEventListener('keyup', function (e) {

      //interrompre l'évenement par défaut
      e.preventDefault();

      //on selectionne la case de formulaire
      nameInpt = document.querySelector('#search');


      datas = new FormData(form);

      datas.append('search', search.value);

      fetch('../model/movies.php', {
        method: 'POST',
        body: datas
      }).then(function (theResponse) {
        return theResponse.text();
      }).then(function (result) {
        myDiv = document.querySelector('#reponse');
        myDiv.innerHTML = result
      })

      // //on execute une promesse(ajax)
      // fetch(`traitement.php?search=${nameInpt.value}`)
      // .then(function(theresponse){
      //     return theresponse.text();
      // })
      // .then(function(datas){


      //     const myDiv = document.querySelector('#reponse');

      //     //on met la reponse dans le paragraphe
      //     myDiv.innerHTML = datas
      // });

    })
    </script>
</body>
</html>