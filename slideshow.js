var slideIndex = 1;
var timeLine;
showSlides(slideIndex);

function plusSlides(n) {    
  slideIndex = slideIndex + n;
  clearTimeout(timeLine);
  showSlides(slideIndex);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  if (n == undefined) {
    n = ++slideIndex;
  }

  if (n > slides.length) {
    slideIndex = 1
  }

  if (n < 1) {
    slideIndex = slides.length
  }


  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  timeLine = setTimeout(showSlides, 5000);

}

  function w3_show()
  {
    document.getElementById("demo").style.display = "block";
  }

   function w3_showForm()
  {
    document.getElementById("form").style.display = "block";
  }



