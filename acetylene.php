<!DOCTYPE html>
<html lang="en">
<head>
  <title>gautham project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:#D2B48C">

<div class="jumbotron text-center" style="background:#800000">
  <h1 style="color:white">Acetylene</h1>

</div>
<div>
  <table><tr><td>
<form method="post" action="first page.php">
      <button type="submit" class="btn btn-primary" >Home</button>
</form>


<div class="container">
  <div class="row">
    <div class="col-sm-4" >
      <h3 style="color:red">About Product</h3>
<p><b> 
Approximately 20% of acetylene is supplied by the industrial gases industry for oxyacetylene gas welding and cutting due to the high temperature of the flame. Combustion of acetylene with oxygen produces a flame of over 3,600 K (3,330 °C; 6,020 °F), releasing 11.8 kJ/g. Oxyacetylene is the hottest burning common fuel gas.[26] Acetylene is the third-hottest natural chemical flame after dicyanoacetylene's 5,260 K (4,990 °C; 9,010 °F) and cyanogen at 4,798 K (4,525 °C; 8,177 °F). Oxy-acetylene welding was a popular welding process in previous decades. The development and advantages of arc-based welding processes have made oxy-fuel welding nearly extinct for many applications. Acetylene usage for welding has dropped significantly. On the other hand, oxy-acetylene welding equipment is quite versatile – not only because the torch is preferred for some sorts of iron or steel welding (as in certain artistic applications), but also because it lends itself easily to brazing, braze-welding, metal heating (for annealing or tempering, bending or forming), the loosening of corroded nuts and bolts, and other applications. Bell Canada cable-repair technicians still use portable acetylene-fuelled torch kits as a soldering tool for sealing lead sleeve splices in manholes and in some aerial locations. Oxyacetylene welding may also be used in areas where electricity is not readily accessible. Oxyacetylene cutting is used in many metal fabrication shops
</b>
      </p>
    </div>
    <div class="col-sm-4" >
      <h3 style="color:red">Images </h3>
      <table>
    

<body style=" background-image: url('34146.png')">

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="dagas1.jpg" style="width:100%">
    
    
   
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="dagas2.jpg" style="width:100%">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="dagas3.jpg" style="width:100%">
    
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<style>
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>



</table>
      
    </div>
    <div class="col-sm-4" >
      <h3 style="color:red">Address</h3>        
      <p>Plot no 28-A karnad industrial area kolnad mangalore 574154</p>
      
    </div>
    <div class="col-sm-4">
      <h3 style="color:red">Contact us </h3>        
      <p><a href="karnadgases@yahoo.com">karnadgases@yahoo.com</a></p><br>
      <p style="color:black">contact-no 9341749977</p>
      
    </div>

    </div>
    <br><br><br><br><br><br><br><br>
    

      
    </div>
</div>
</div>




</body>
</html>