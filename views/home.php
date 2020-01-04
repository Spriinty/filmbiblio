<!doctype html>
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
      <button type="submit" id="suicide" name="suicide">Suicide Squad</button>
      <button type="submit" id="diversion" name="diversion">Diversion</button>
      <button type="submit" id="instinct" name="instinct">Instinct de survie</button>
      <button type="submit" id="shaolin" name="shaolin">Shaolin Soccer</button>
      <button type="submit" id="chtis" name="chtis">Bievenue chez les Ch'tis</button>
      <button type="submit" id="chicken" name="chicken">Chicken Run</button>
      <button type="submit" id="mans" name="mans">Le Mans 66</button>
      <button type="submit" id="rush" name="rush">Rush</button>
      <button type="submit" id="drive" name="drive">Drive</button>
      <button type="submit" id="whiplash" name="whiplash">Whiplash</button>
      <button type="submit" id="getout" name="getout">Get Out</button>
      <button type="submit" id="parasite" name="parasite">Parasite</button>
    </form>
    <div id="reponseBouton"></div>

    <form action="" id="formImage">
      <input type="image" src="../media/musical.jpg" id="suicidesquad" name="suicidesquad" width="15%">
      <input type="image" src="../media/musical.jpg" id="diversionimage" name="diversionimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="instinctimage" name="instinctimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="shaolinimage" name="shaolinimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="chtisimage" name="chtisimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="chickenimage" name="chickenimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="mansimage" name="mansimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="rushimage" name="rushimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="driveimage" name="driveimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="whiplashimage" name="whiplashimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="getoutimage" name="getoutimage" width="15%">
      <input type="image" src="../media/musical.jpg" id="parasiteimage" name="parasiteimage" width="15%">
    </form>

    <div id="reponseimage"></div>

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
        myDivBtn.innerHTML = resulte;
      })
    })


    
    const myButtonForm = document.querySelector('#formImage');

// on affecte une ecoute d'évenement submit
formImage.addEventListener('click', function (e) {

    //interrompre l'évenement par défaut
    e.preventDefault();
    
    imgsSuicide =document.querySelector('#suicidesquadimage');
    imgdiversion=document.querySelector('#diversionimage');
    imginstinct =document.querySelector('#instinctimage');
    imgshaolin =document.querySelector('#shaolinimage');
    imgchtis =document.querySelector('#chtisimage');
    imgchicken =document.querySelector('#chickenimage');
    imgmans =document.querySelector('#mansimage');
    imgrush =document.querySelector('#rushimage');
    imgdrive =document.querySelector('#driveimage');
    imgwhiplash =document.querySelector('#whiplashimage');
    imggetout =document.querySelector('#getoutimage');
    imgparasite =document.querySelector('#parasiteimage');

datas = new FormData(form);

//   datas.append('search', search.value);

  fetch('../model/movies.php', {
    method: 'POST',
    body: datas
  }).then(function (thResponseimage) {
    return thResponseimage.text();
  }).then(function (resultimage) {
    imgResponse = document.querySelector('#reponseimage');
    imgResponse.innerHTML = resultimage;
  })
})

    </script>
</body>
</html>