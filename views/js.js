let inptFormImg = document.querySelectorAll('.inpt-form-img');

console.log(inptFormImg);

inptFormImg.forEach(function(imageclic){
    imageclic.addEventListener('click', function(){
            window.scrollTo(0, 190);
        });
    })
