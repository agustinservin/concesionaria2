var slideIndex = 1;
showSlides(slideIndex);
<<<<<<< HEAD

=======
>>>>>>> 6f08498bd54eb5021e2f4649a18bcfea248de63a
// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
<<<<<<< HEAD
      slides[i].style.display = "none";
=======
      slides[i].style.display = "none"; 
>>>>>>> 6f08498bd54eb5021e2f4649a18bcfea248de63a
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
<<<<<<< HEAD
}
=======
}
>>>>>>> 6f08498bd54eb5021e2f4649a18bcfea248de63a
