<?php include 'file/connection.php'; ?>
<!DOCTYPE html>
<html>
<?php $title="DONORLY | DONOR FORM"; ?>
<?php require 'head.php'; ?>
   <head>
      <meta charset="utf-8">
      
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
      <style>
        body{overflow-x: hidden;}
       
        .topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
  
  left:-10%;
}




.active {
  background-color: #04AA6D;
  color: white;
}
  .site-header__title{
    position: relative;
    color:#04AA6D;
    font-size: 40px;
    left:360px;
  }
.main-content__body{
  background:linear-gradient( #bdf2df,#c7f0e1) ;
  padding: 20px;
  text-align: justify;
  text-justify: inter-word;
}
.btnn{
  background: #04AA6D;
  color: white;

  width: 20%;
  border-radius: 3px;
}
.box1{
  border: 2px solid black;
  margin: 2%;
  padding: 20px;
  text-align: justify;
  text-justify: inter-word;
}
.box3 h5{
  position: relative;
  left:40%;
}
.box3 {
  position: relative;
  left:1%;
}
</style>



<body>
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysqli_connect_error());
}
?>

<?php
$info= "SELECT * FROM donors ORDER BY ID DESC";
$mydata= mysqli_query($conn,$info);
$row = mysqli_fetch_array($mydata, MYSQLI_ASSOC);
?>

<header class="site-header" id="header">
		<h6 class="site-header__title" data-lead-id="site-header-title">Congratulations!</h6>
	</header>

    <div class="main-content">
		
		<p class="main-content__body" data-lead-id="main-content-body"> 
        You have opted to be an Organ Donor.<br>
        An Important point to note once you register as a donor is that your DONOR CARD is not a legal entity
     or an official document. it is merely an expression of your wish to be a donor. 
     The card that we will send you does not carry any legal weight,
     but do keep it with you and make sure you let all your
     friends and family know about your intended choice.<br>
     <b>By LAW of India, organ and tissue donation cannot take place
     without the written consent of the Donor's family. THerefore, Donors should
     help their families understand the reason behind their decision to be an Organ Donor.</b>
    </p>
	</div>

<p>-------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

<div id="pdf" class="box3" >
<h5>Confirmation Page</h5>
<p class="box1">ORGAN and TISSUE DONATION - GIVING LIFE
You now have the opportunity to offer someone a second chance at life by becoming an organ and/or tissue donor. Please consider this option and if you are interested, complete and sign the form below. Identification as a Donor will appear on your new Health Card (and must be reconfirmed during the renewal process). The information below will be stored in a computerized donor registry.
For donor program information, please call: (902) 473-5523 or toll-free 1-877-841-3929.</p>
<?php echo "I &nbsp"."<b>".$row['Firstname']."</b>"."&nbsp"."<b>".$row['Lastname']."</b>"."&nbsp".","."Born on"."&nbsp"."<b>".$row['birthday']."</b>"."&nbsp"."of Blood Group: "."&nbsp"."<b>".$row['BloodGroup']."</b>"."<br>"."Resident of"."&nbsp"."<b>".$row['Address']."</b>".","."&nbsp"."bearing Email ID"."&nbsp"."<b>".$row['Email']."</b>".","."&nbsp"."Phone Number"."&nbsp"."<b>".$row['Phone']."</b>"."<br>"."would like to donate my organs in event of my death"."<br>"; ?>
<?php echo "Organs You Have selected to donate: <br>"?>
<?php
$serializedData = $row['checkbox'];

$organData = unserialize($serializedData);

$organNames = array_values($organData);

foreach ($organNames as $organ) {
    echo "<b>".$organ . "&nbsp&nbsp&nbsp</b>";
}
?>

<?php echo "<br>"."I CONFIRM , I HAVE HAD DISCUSSION WITH MY FAMILY"."<br>"."Signature: ____________________"; ?>
<br>
<br><p>-------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
</div>
<button class ="btnn" onclick="printDiv('pdf','Title')">Print</button>
<br>
<a href="loggedin.php">back home</a>
<br>


<script>
var doc = new jsPDF();

function saveDiv(divId, title) {
doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
doc.save('confirmation.pdf');
}

function printDiv(divId,
 title) {

 let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

 mywindow.document.write(`<html><head><title>${title}</title>`);
 mywindow.document.write('</head><body >');
 mywindow.document.write(document.getElementById(divId).innerHTML);
 mywindow.document.write('</body></html>');

 mywindow.document.close(); // necessary for IE >= 10
 mywindow.focus(); // necessary for IE >= 10*/

 mywindow.print();
 mywindow.close();

 return true;
}

</script>




