 
<?php
session_start();
include 'file/connection.php';
if(isset($_POST["submit"]))
{
   $FirstName = $_POST['FirstName'];
   $LastName = $_POST['LastName'];
   $FatherName = $_POST['FatherName'];
   $Email = $_POST['Email'];
   $Phone = $_POST['Phone'];
   $Occupation = $_POST['Occupation'];
   $birthday = $_POST['birthday'];
   $BloodGroup = $_POST['BloodGroup'];
   $Gender = $_POST['Gender'];
   $Address = $_POST['Address'];
   $checkbox1 = $_POST['chkl'] ; 
   $duplicate = mysqli_query($conn, "SELECT * FROM donors WHERE Email='$Email' ");
if(mysqli_num_rows($duplicate)>0){
   echo "<script> alert('You have already Filled the form with this Email ID please check your activities.');</script>";

}
else{
   

   
      
      
   $data= array("$checkbox1[0]","$checkbox1[1]","$checkbox1[2]","$checkbox1[3]","$checkbox1[4]","$checkbox1[5]","$checkbox1[6]");
   $data= serialize($data);
   $query= "INSERT INTO donors(Firstname,Lastname,FatherName,Email,Phone,Occupation,birthday,BloodGroup,Gender, Address, checkbox) values('$FirstName','$LastName','$FatherName','$Email','$Phone','$Occupation','$birthday','$BloodGroup','$Gender', '$Address', '$data')";
   $data= mysqli_query($conn,$query); 
   header("location:formsubmited.php");
   }
}
?>
<!DOCTYPE html>
<html>
<?php $title="DONORLY | DONOR FORM"; ?>
<?php require 'head.php'; ?>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" contact="width=device-width, initial-scale=1">
      

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
   box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
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
.container .form .input_field .check .checkmark:before
{
   content: "";
   position: absolute;
   bottom:3px;
   left:1px;
   width:8px;
   height:8px;
   border:2px solid;
   border-color: transparent transparent white white;
   transform: rotate(-60deg);
}
.container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark{
   background:#04AA6D;
}
.container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark:before{
   display: block;
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


.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #04AA6D;
  color: white;
}
      </style>   
</head>
<body>
 
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>
</div>
   <div class="container">
      <form  method="POST" action="">
      <div class="title">
         DONOR FORM
      </div>

      <div class ="form">
         <div class="input_field" >
            <label for="fname">First Name</label>
            <input type="text" class="input" name="FirstName" required>
         </div>

         <div class="input_field">
            <label>Last Name</label>
            <input type="text" class="input" name="LastName" required>
         </div>

         <div class="input_field">
            <label>Father Name</label>
            <input type="text" class="input" name="FatherName" required>
         </div>

         <div class="input_field">
            <label>E-mail Address</label>
            <input type="email" class="input" name="Email" required>
         </div>

         <div class="input_field">
         <label for="phone">Phone Number:</label>
         <input type="text" class="input" title="Error Message" pattern="[1-9]{1}[0-9]{9}" name="Phone" required> 
         </div>

         <div class="input_field">
            <label>Occupation</label>
            <div class="custom_select">
            <select name="Occupation" required>
            <option value="not selected">Select</option><option value="Student">Student</option><option value="Business">Business</option>
            <option value="Professional">Professional</option><option value="Self employed">Self Employed</option>
            <option value="Government Employee">Government Employee</option><option value="Armed Forces">Armed Forces</option>
            <option value="Retired">Retired</option><option value="Homemaker">Homemaker</option><option value="Others">Others</option>
         </select>
</div>
         </div>
         <div class="input_field">
         <label for="birthday">Date Of Birth:</label>
         <input type="date" id="birthday" class ="input" name="birthday" max="2005-12-31" required="" >
         </div>

         <div class="input_field">
            <label>Blood Group</label>
            <div class="custom_select">
            <select name="BloodGroup" required>
            <option value="not selected">Select</option><option value="A+">A+</option><option value="A-">A-</option>
            <option value="B+">B+</option><option value="B-">B-</option>
            <option value="O+">O+</option><option value="O-">O-</option>
            <option value="AB+">AB+</option><option value="AB-">AB-</option>
         </select>
</div>
         </div>

         <div class="input_field">
            <label>Gender</label>
            <div class="custom_select">
            <select name="Gender" required><option value="not selected">Select</option><option value="Male">Male</option><option value="Female">Female</option><option value="Other">Other</option>
         </select>
</div>
         </div>
         <div class="input_field">
            <label>Address</label>
            <textarea class="textarea" name="Address" required></textarea>
</div>

<div class="input_field terms">
         <label >Organs I Wish To Donate</label><br>
         <input type="checkbox" id="chk"  value="Cornea(Eyes)" name="chkl[]"> Cornea(Eyes)
         <input type="checkbox" id="chk" value="Kidney" name="chkl[]"> Kidney 
         <input type="checkbox" id="chk" value="Heart" name="chkl[]"> Heart 
         <input type="checkbox" id="chk" value="Lungs" name="chkl[]"> Lungs<br> 
         <input type="checkbox" id="chk" value="Liver" name="chkl[]"> Liver 
         <input type="checkbox" id="chk"  value="Pancrea" name="chkl[]"> Pancrea
         <input type="checkbox" id="chk" value="Skin" name="chkl[]"> Skin <br><br>
         <input type="button" class="btn" onclick="selects()" value="Select All"/> <br>
         </div><br>



         <div class="input_field terms">
            <label class="check">
               <input type="checkbox" required>
               <span class ="checkmark"></span>
               </label>
            <p>Agree to terms and conditions</p>
         </div>

<div class ="input_field">
   <input type="submit" value= "Submit" class="btn"  id="myBtn" name="submit">
</div>
</div>
</form>
</div>


<script>  
            function selects(){  
                var ele=document.getElementsByName('chkl[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            </script>



