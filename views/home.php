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
    </form>
    <div id="reponse"></div>

    <form action="" id="buttonForm">
    <button type="submit" id="suicide">Suicide Squad</button>
    <button type="submit" id="diversion">Diversion</button>
    <button type="submit" id="instinct">Instinct de survie</button>
    <button type="submit" id="shaolin">Shaolin Soccer</button>
    <button type="submit" id="chtis">Bievenue chez les Ch'tis</button>
    <button type="submit" id="chicken">Chicken Run</button>
    <button type="submit" id="mans">Le Mans 66</button>
    <button type="submit" id="rush">Rush</button>
    <button type="submit" id="drive">Drive</button>
    <button type="submit" id="whiplash">Whiplash</button>
    <button type="submit" id="getout">Get Out</button>
    <button type="submit" id="parasite">Parasite</button>
</form>
<div id="reponseBouton"></div>
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


    const myButtonForm = document.querySelector('#buttonForm');

    // on affecte une ecoute d'évenement submit
    myButtonForm.addEventListener('submit', function (e) {

        //interrompre l'évenement par défaut
        e.preventDefault();
        
        btNsuicide =document.querySelector('#suicide');
        btNdiversion=document.querySelector('#diversion');
        btNinstinct =document.querySelector('#instinct');
        btNshaolin =document.querySelector('#shaolin');
        btNchtis =document.querySelector('#chtis');
        btNchicken =document.querySelector('#chicken');
        btNmans =document.querySelector('#mans');
        btNrush =document.querySelector('#rush');
        btNdrive =document.querySelector('#drive');
        btNwhiplash =document.querySelector('#whiplash');
        btNgetout =document.querySelector('#getout');
        btNparasite =document.querySelector('#parasite');

    datas = new FormData(form);

    //   datas.append('search', search.value);

      fetch('../model/movies.php', {
        method: 'POST',
        body: datas
      }).then(function (thResponse) {
        return thResponse.text();
      }).then(function (resulte) {
        myDivBtn = document.querySelector('#reponseBouton');
        myDivBtn.innerHTML = resulte
      })
    })
    </script>
</body>
</html>