<!DOCTYPE html>
<html>
<?php $title="DONORLY | Decreased organ donation data"; ?>
<?php require 'head.php'; ?>
   <head>
      <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/style5.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
<link rel="stylesheet" href="css/styletry.css">
<style>
body{overflow-x: hidden;}




/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: 60px ;
  top:50px;
  left:30px;
}
.slideshow-container1 {
  max-width: 1000px;
  position: relative;
  margin: 60px ;
  top:-330px;
  left: 880px;
}


/* Next & previous buttons */
.prev, .next, .prev1, .next1{
  cursor: pointer;
  position: relative;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: rgb(204, 28, 28);
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.prev{
  right: 28px;
  bottom:120px;
}
.prev1{
  right: 40px;
  bottom:140px;
}
.next1{
  right: -405px;
  bottom:140px;
}

/* Position the "next button" to the right */
.next {
  left: 410px;
  bottom:120px;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover, .prev1:hover, .next1:hover  {
  background-color: rgba(0,0,0,0.8);
}
.heading{
  position:relative;
  left:300px;
  color: #04AA6D;
}
.heading1{
  position:relative;
  top:-450px;
  left:330px;
  color: #04AA6D;
}
#rate{
  position:relative;
  top:-350px;
}
</style>

</head>
<body>
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>
</div>
<div class="jumbotron">
  <h1>DECREASED DONATION DATA IN INDIA</h1>
  <p>"These are some statistics of donors throughout years."</p>
</div>
<section class="my">
<div class="slideshow-container">
<div class="mySlides">
  <img src="image/Slide-No-1.jpg" style="width:50%">
</div>

<div class="mySlides">
  <img src="image/Slide-No-2.jpg" style="width:50%">
</div>

<div class="mySlides">
  <img src="image/Slide-No-3.jpg" style="width:50%">
</div>

<div class="mySlides">
  <img src="image/Slide-No-4.jpg" style="width:50%">
</div>

<div class="mySlides">
  <img src="image/Slide-No-5.jpg" style="width:50%">
</div>

<div class="mySlides">
  <img src="image/Slide-No-6.jpg" style="width:50%">
</div>

<div class="mySlides">
  <img src="image/Slide-No-7.jpg" style="width:50%">
</div>

<a class="prev" onclick="plusSlides(-1)">&laquo</a>
<a class="next" onclick="plusSlides(1)">&raquo</a>

</div>


<div class="slideshow-container1">

  <div class="mySlides1">
    <img src="image/data1.png" style="width:50%">
  </div>
  
  <div class="mySlides1">
    <img src="image/data2.png" style="width:50%">
  </div>
  
  <div class="mySlides1">
    <img src="image/data3.png" style="width:50%">
  </div>
  
  <div class="mySlides1">
    <img src="image/data4.png" style="width:50%">
  </div>
  
  <div class="mySlides1">
    <img src="image/data5.png" style="width:50%">
  </div>
  
  <div class="mySlides1">
    <img src="image/data6.png" style="width:50%">
  </div>
  
  <div class="mySlides1 ">
    <img src="image/data7.png" style="width:50%">
  </div>
  
  <a class="prev1" onclick="plusSlides1(-1)">&laquo</a>
  <a class="next1" onclick="plusSlides1(1)">&raquo</a>
  
  </div>
  <div class="jumbotron" id="rate">
  <h1>Donation Rate Of Different Countries</h1>
  <p>"India is least amongst the countries, Help saving 9 Lives by Pledging Your Organs."</p>
</div>
<img src="image/indiasdata.jpg" style=" position: relative; width:70%; left:150px; top:-400px;">

</section>
<?php require "Footer1.php" ?>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1;}    
  if (n < 1) {slideIndex = slides.length;}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
}
</script>

<script>
let slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(m) {
  showSlides1(slideIndex1 += m);
}

function currentSlide1(m) {
  showSlides1(slideIndex1 = m);
}

function showSlides1(m) {
  let j;
  let slides1 = document.getElementsByClassName("mySlides1");
  if (m > slides1.length) {slideIndex1 = 1;}    
  if (m < 1) {slideIndex1 = slides1.length;}
  for (j = 0; j < slides1.length; j++) {
    slides1[j].style.display = "none";  
  }
  slides1[slideIndex1-1].style.display = "block";  
}
</script>

</body>
</html> 
