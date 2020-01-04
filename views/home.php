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
        
      datas = new FormData(myForm);
      
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


    
    const myButtonFormImg = document.querySelector('#formImage');

// on affecte une ecoute d'évenement submit
myButtonFormImg.addEventListener('click', function (e) {

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