<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Become A Donor"; ?>
<?php require 'head.php'; ?>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/styletry.css">
  <link rel="stylesheet" type="text/css" href="css/style5.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body{overflow-x: hidden;}
    .be-a-donor{
        position: relative;
        background: #04AA6D;
        color:aliceblue;
        border-radius: 10px;
        padding: 12px 24px;
  text-align: center;
  left:100px;
    }
    .be-a-donor:hover {
  background-color: #02995e;
text-decoration: none;
color:white;
}

  .steps{
    background-image: linear-gradient(to right, #430a40,#81137B, #714a8b);
    color:white;
  }

  .photo{
    position: relative;
    left:930px;
    top:-400px;
    height:360px;
    width:400px;
  }
</style>
</head>
<body>

<body>
<div class="mobile-container">
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>

  
</div>
</div>

<div class="jumbotron">
  <h1>Donorly</h1>
  <p>Pledging your organs is a simple procedure. Just fill out the online pledge form and we will send you a donor card with your unique government registration number. All pledges are registered with the National Organ &amp; Tissue Transplant Organisation (NOTTO). Registering as an Organ donor is merely an expression of your intent to be an Organ donor. The card that we will send you does not carry any legal weight, however, it is a great way to show everyone your intent. So keep it with you at all times and make sure you let your family and friends know about your choice.</p>
<p>According to Indian law, it is your next of kin who will decide whether to donate your organs or not upon death. Even if you have pledged your organs, no donation will happen unless the next of kin gives their consent. Therefore, when you pledge to be an organ donor, it’s very important that you discuss your wish to donate with your family. This is to enable your family to carry out your wishes in case the need arises.</p>
</div>
<div class="steps">
<div class="col-lg-6 col-md-6 col-12">
<h3>Follow the Below Simple Steps To get DONOR CARD.</h3>
			<p class="py-3">1. If you are First Time User Register your Account.<br>2. Login with the same registered E-mail ID.<br>3. Fill The PLedge Form Carefully (as the information you submit will be reflected in your donor card) and submit.<br>
            5. After submitting You will recive a confirmation page, Download the confirmation page and your donor card with unique id will be sent to your registered Address in 4-5 days.<br>
            6. Click below to view the sample donor card and click to register and fill the donor pledge form.</p>
<p>          <br><br><br><br><br><br></p>
<p> </p>
<p> </p>
</div>

<div class="col-lg-6 col-md-6 col-12">
<a  class="be-a-donor" href="register.php">Register</a>
<a  class="be-a-donor" href="Login.php">Login</a>
<a  class="be-a-donor" href="donorCard.php">Sample Donor Card</a>
</div>



</div>
<img class="photo" src="image/photo6.jpg">
<?php require "Footer1.php" ?>
