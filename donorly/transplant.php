<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | About page"; ?>
<?php require 'head.php'; ?>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/styletry.css">
  <link rel="stylesheet" type="text/css" href="css/style5.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>body{overflow-x: hidden;}</style>
</head>
<body>

<div class="mobile-container">
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>

  <div id="myLinks">
    <a href="form.php">Pledge Organs</a>
    <a href="FAQ.php">FAQs</a>
    <a href="donorCard.php">Donar Card Sample</a>
    <a href="transplant.php">Transplant Laws in India</a>
    <a href="DATA.html">Decreased Donors Data in India</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>
<div class="jumbotron">
  <h1>Donorly</h1>
  <p>"Write a Story of Hope: Donorly - Empowering Organ Donation."</p>
</div>


<section class="my">
	<div class="py-5">
		<h2 class="text-center">Legal Terms and Conditions</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="image/T1.png" class="img-fluid aboutimg">
        <p>               </p>
        <img src="image/tran.png" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<p class="py-3">
    <h3>Human Organ Transplantation Acts</h3><br><br>
    <h6>Ministry of Law, Justice and Company Affairs (Legislative Department) New Delhi,the 11th July, 1994 The following Act of Parliament received the assent of the President on the 8th July, 1994 and is hereby published for general information:- THE TRANSPLANTATION OF HUMAN ORGANS ACT, 1994 No.42 OF 1994 [8th July, 1994]
</h6><br><br>
An Act to provide for the regulation of removal, storage and transplantation of human organs for therapeutic purposes and for the prevention of commercial dealings in human organs and for matters connected therewith or incidental thereto. Whereas it is expedient to provide for the regulation of removal, storage and transplantation of human organs for therapeutic purposes and for the prevention of commercial dealings in human organs; And whereas Parliament has no power to make laws for the States with respect to any of the matters aforesaid except as provided in articles 249 and 250 of the Constitution; And whereas in pursuance of clause (1) of article 252 of the Constitution, resolutions have been passed by all the Houses of the Legislatures of the States of Goa, Himachal Pradesh and Maharashtra to the effect that the matters aforesaid should be regulated in those States by Parliament by law.</P>
    <p><a href="https://jeevandan.gov.in/Acts/OrganTransAct.pdf">1.THE TRANSPLANTATION OF HUMAN ORGANS ACT,1994</a>.</p>
    <p> <a href="https://jeevandan.gov.in/Acts/ORGANTRANSPLANTATIONACT1995.pdf">2.THE TRANSPLANTATION OF HUMAN ORGAN RULES,1995</a>.</p>
    <p><a href="https://jeevandan.gov.in/Acts/THO-Rules-1995-Amendment-2008.pdf">3.THO-Rules-1995-Amendment-2008</a>.</p>
    <p> <a href="https://jeevandan.gov.in/Acts/AMENDMENT%20Bill%202009.pdf">4.THE TRANSPLANTATION OF HUMAN ORGAN BILL,2009</a></p>
    <p><a href="https://jeevandan.gov.in/Acts/AMENDMENT%20Bill%202011.pdf">5.THE TRANSPLANTATION OF HUMAN ORGAN BILL,2011</a>.</p>
    <p> <a href="https://jeevandan.gov.in/Acts/TransplantaionofHumanOrgansandTissuesRules2013.pdf">6.THE TRANSPLANTATION OF HUMAN ORGAN RULES,2013</a>.</p>
    <p><a href="https://jeevandan.gov.in/Acts/THOA-Rules-2014.pdf">7.THE TRANSPLANTATION OF HUMAN ORGAN RULES,2014</a>.</p>

  </body>
</html>
</div>
<a href="about.php"> </a> 
			</div>
		</div>
	</div>
</section>
<script>
function myFunction1() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<?php require "Footer1.php" ?>
</body>
</html>

