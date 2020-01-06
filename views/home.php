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

    <form action="" id="formImage" name="imageButton" method="POST">

      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
      <input type="image" src="../media/western.jpg" width="15%"  class="inpt-form-image">
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
    
    imgsSuicide =document.querySelector('#suicidesquad');
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

datas = new FormData(myButtonFormImg);

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









let inptFormImg = document.querySelectorAll(".inpt-form-image");


inptFormImg.forEach(function(pouet) {
  pouet.addEventListener('click', function (e) {
e.preventDefault()

datas = new FormData();
datas.append(pouet.name);
console.log(pouet.name);

// fetch('../model/movies.php', {
// method: 'POST',
// body: datas
// }).then(function (thResponseimage) {
// return thResponseimage.text();
// }).then(function (resultimage) {
// imgResponse = document.querySelector('#reponseimage');
// imgResponse.innerHTML = resultimage;

// })

// })

});


    </script>
</body>
</html>