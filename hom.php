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

    <form action="" id="recup">
      <input type="image" src="../media/musical.jpg" width="15%" class="inpt-form-img" name="suicidesquad" >
      
      <input type="image" src="../media/musical.jpg" width="15%" class="inpt-form-img" name="diversionimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%" class="inpt-form-img" name="instinctimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%" class="inpt-form-img" name="shaolinimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%" class="inpt-form-img" name="chtisimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%"  class="inpt-form-img" name="chickenimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%"  class="inpt-form-img" name="mansimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%"  class="inpt-form-img" name="rushimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%"  class="inpt-form-img" name="driveimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%"  class="inpt-form-img" name="whiplashimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%"  class="inpt-form-img" name="getoutimage" >
      
      <input type="image" src="../media/musical.jpg" width="15%"  class="inpt-form-img" name="parasiteimage" >
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
    })


inptFormImg = document.querySelectorAll(".inpt-form-img");
console.log(inptFormImg);

inptFormImg.forEach(function(pouet) {
console.log(pouet);

  pouet.addEventListener('click', function (e) {
    e.preventDefault()
        //interrompre l'évenement par défaut
        

    datas = new FormData();
    datas.append(pouet.name, pouet.value);

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
});


    </script>
</body>
</html>