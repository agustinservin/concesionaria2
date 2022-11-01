<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <img src="<?php echo constant('URL');?>public/images/banner2.png" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="<?php echo constant('URL');?>public/images/banner6.jpg" style="width:100%">
    
  </div>

  <div class="mySlides">
    <img src="<?php echo constant('URL');?>public/images/banner5.jpg" style="width:100%">
    
  </div>
  <div class="mySlides">
    <img src="<?php echo constant('URL');?>public/images/banner7.jpg" style="width:100%">
    
  </div>
  <div class="mySlides">
    <img src="<?php echo constant('URL');?>public/images/banner8.png" style="width:100%">
    
  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <div style="width:100%; display:flex; position:absolute;bottom:0%;background:rgba(0, 0, 0, .5);height:10%;align-items:center;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>
</div>


<!-- The dots/circles -->


