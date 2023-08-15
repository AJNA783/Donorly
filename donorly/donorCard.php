<?php include 'file/connection.php'; ?>
<!DOCTYPE html>
<html>
<?php $title="DONORLY | DONOR CARD SAMPLE"; ?>
<?php require 'head.php'; ?>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" contact="width=device-width, initial-scale=1">
<style>
body{overflow-x: hidden;}   
.my-5{
    background-color: #04AA6D;
}
.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}




.active {
  background-color: #04AA6D;
  color: white;
}
.card img{
  position: relative;
  width:40%;
  height:20%;
}
#front{
  position: relative;
  left:30px;
  top:70px;
  height:270px;
}
#back{
  position: relative;
  left: 55%;
  top:-220px;
  height:270px;
}
.in{
  background:linear-gradient( #bdf2df,#c7f0e1) ;
  padding: 20px;
  text-align: justify;
  text-justify: inter-word;
}
</style>
    </head>
    <body>
    <div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>
</div>        
<div class="cardbg"><br>
  <h3>The Sample DONOR CARD Front and back:</h3><br>
  <h5 class="in">You will Recieve This DONOR CARD with your details after 1-2 weeks of Submission of Donor form to Your Registered Residential Address. Download the confirmation page till you recieve the card.</h5>
            <div class="card">
<img id="front" src="image/cardd1.jpg"></img><br>
<img id="back" src="image/cardd2.jpg"></img><br>

                </div>

</div><



<?php require "Footer1.php" ?>

</body>
      
