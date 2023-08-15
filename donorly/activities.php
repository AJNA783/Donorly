<?php 
 
include 'file/connection.php'; 
session_start();
if(isset($_POST["submit"])){
   $loginmail= $_POST["Email"];
   $result= mysqli_query($conn,"SELECT * FROM donors WHERE Email='$loginmail'");
   $row= mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
    header("location:formsubmited.php");


}
else{
echo "<script>alert('YOU have not filled the DONOR FORM Yet!');</script>";
}
}?>
<!DOCTYPE html>
<html>
    <head><link rel="shortcut icon" type="image/jpeg" href="image/logo.jpg">
    <title>DONORLY|User Activities</title>
        <style>.container .form
{
   width : 100%;
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

.container .form .input_field .btn
{
   width: 15%;
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
    <body>
    <div class="container">
    
    <div class ="form">
    <form action="" method="POST">
    <div class="input_field">
            <label>Enter your E-mail Address To download your Confirmation page</label>
            <input type="email" class="input" name="Email" required>
         </div>
         <div class ="input_field">
   <input type="submit" value= "Submit" class="btn"  id="myBtn" name="submit">
</div>
</div>
</form>
</div>
<p>-------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

</body>