<html>
<head>
  <title>Online Shopping</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet"
    type="text/css" />
    <script src="script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    /* Slideshow container */
.slideshow {
  max-width: 800px;
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
  color: rgb(0, 0, 0);
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
  background-color: rgba(239, 230, 230, 0.8);
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

/* Number text (1/8 etc) */
.numbertext {
  color: #000000;
  font-size: 16px;
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
  background-color: #060606;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #4e4949;
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
</head>

<body>

    <!--inside-->
  <section class="whats-inside">
    <a id="inside_section"></a>
      <h2 class="demo">what's</h2>
      <h2 class="demo2">INSIDE...</h2>
      <div class="div1">
        <img src="inside.jpeg" class="inside">
        <br>
      </div>
     
    <br>
    <!-- Slideshow container -->
<div class="slideshow">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext">1 / 8</div>
    <img src="vflask.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 8</div>
    <img src="singlewall.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 8</div>
    <img src="cb.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 8</div>
    <img src="ic.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 8</div>
    <img src="fc.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 8</div>
    <img src="be.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">7 / 8</div>
    <img src="ca.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 8</div>
    <img src="kw.jpeg" style="width:100%" height="80%">
    <div class="text">Caption Text</div>
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

<div class="div1">
  <button class="button" onclick="nextPage()">Next</button>
  </div>

</section>

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

</body>
</html>