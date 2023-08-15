<?php 

include 'file/connection.php'; 
session_start();
if(isset($_POST["submited"])){
   $loginmail= $_POST["loginmail"];
   $password= $_POST["password"];
   $result= mysqli_query($conn,"SELECT * FROM reglog WHERE Email='$loginmail'");
   $row= mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
if($password==$row["password"]){
   $_SESSION["login"]=true;
   $_SESSION["id"]=$row["id"];
header("Location:loggedin.php");
}
else{
echo "<script> alert('Wrong Password');</script>";
}

}
else{
echo "<script>alert('User not registered, please Register before login');</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<?php $title="DONORLY | DONOR FORM"; ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style5.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
<link rel="stylesheet" href="css/styletry.css">
  <style>
   body{overflow-x: hidden;}
    *
{  padding :0;
   margin:0;
   box-sizing: border-box;
}
body
{
   background-color: #04AA6D;
   padding: 0 10px;
}
.container
{
   max-width: 500px;
   width: 100%;
   background-color:white;
   margin: 20px auto;
   padding: 30px;
   
}
.container .title
{
   font-size: 24px;
   font-weight: 700;
   margin-bottom: 25px;
   color:#04AA6D;
   text-transform:uppercase;
   text-align: center;

}
.container .form
{
  position: relative;
  left:190px;
   width : 60%;
}
.container .form .input .input_field
{
   margin-bottom: 15px;
   display: flex;
   align-items: center;
}
.container .form .input_field label
{
   width: 200px;
   margin-right: 10px;
   font-size: 14px;
}
.container .form .input_field .input, .container .form .input_field textarea{
   width : 100%;
   outline: none;
   border: 1px solid #04AA6D;
   font-size: 15px;
   padding: 8px 10px;
   border-radius: 3px;
   transition: all 0.5s ease;
}
.container .form .input_field .textarea{
resize:none;
height:70px;
   }
.container .form .input_field .custom_select{
   position: relative;
   width: 100%;
   height: 37px;
}
.container .form .input_field textarea{
   resize: none;
   height : 70px;
}
.container .form .input_field .custom_select select{
   -webkit-appearance:none;
   appearance: none;
   width:100%;
   height: 100%;
   padding: 8px 10px;
   border: 1px solid #04AA6D;
   border-radius: 3px;
   outline: none;
}
.container .form .input_field .custom_select:before{
   content:"";
   position: absolute;
   top:12px;
   right:10px;
   border: 8px solid black;
   border-color: #04AA6D transparent transparent transparent;
   pointer-events: none;
}
.container .form .input_field .input:focus, .container .form .input_field .textarea:focus
,.container .form .input_field select:focus
{
   border: 1px solid #04AA6D;
}
.container .form .input_field p
{
   font-size: 14px;
   color: #04AA6D;
}
.container .form .input_field .check
{
   width: 15px;
   height: 15px;
   position: relative;
   display: block;
   cursor: pointer;
}
.container .form .input_field .check input[type ="checkbox"]
{
   position : absolute;
   top: 0;
   left: 0;
   opacity:0;
}
.container .form .input_field .check .checkmark
{
   width: 15px;
   height: 15px;
   border: 1px solid #04AA6D;
   display: block;
   position : relative;

}


.container .form .input_field .btn
{
   width: 100%;
   padding: 8px 10px;
   font-size:15px;
   border:0;
   background :#04AA6D;
   color:white;
   cursor:pointer;
   border-radius:3px;
   outline:none;
}
.container .form .input_field:last-child
{
   margin-bottom: 0;
}
.container .form .input_field .btn:hover
{
   background:#04995C;
}
@media (max-width:420px){
   .container .form .input_field{
      margin-bottom: 15px;
      display: flex;
      align-items: center;
   }
   .container .form .input_field label{
      margin-bottom: 5px;
   }
   .container .form .input_field .terms
   {
      flex-direction: row;
   }
}




</style>
</head>
<?php $title="Bloodbank | Login"; ?>
<?php require 'head.php'; ?>
<body>
 
  <div class="mobile-container">
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>

  <div id="myLinks">
    <a href="form.php">Pledge Organs</a>
    <a href="guide.php">Transplant Guide</a>
    <a href="donorCard.php">Donar Card Sample</a>
    <a href="transplant.php">Transplant Laws in India</a>
    <a href="DATA.php">Decreased Donors Data in India</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>

    <div class="container cont">

      <div class="container">
      <form action="" method="POST">
      <div class="title">
         USER LOGIN 
      </div>

      <div class ="form">
         <div class="input_field" >
            <label for="mail">E-mail</label>
            <input type="email" class="input" name="loginmail" required>
         </div>

         <div class="input_field">
            <label>Password</label>
            <input type="password" class="input" name="password" required>
         </div>

       <div class ="input_field">
   <input type="submit" value= "Submit" class="btn" name="submited" id="myBtn"></div>
</form>
<a href="register.php">Don't have a account? register here</a>
</div>

</body>
</html>
