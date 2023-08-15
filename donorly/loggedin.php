<?php 
    require 'file/connection.php';
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="DONORLY | home page"; ?>
<?php require 'head.php'; ?>
<!-------------------------------------------------------------------------------------------------->
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style5.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
<link rel="stylesheet" href="css/styletry.css">
<style>
 body{overflow-x: hidden;}
 .recentNews {
    background: rgb(110,162,200);
background: radial-gradient(circle, rgba(110,162,200,1) 27%, rgba(103,3,209,1) 66%, rgba(0,237,255,1) 100%);
  }
.recentNews .news-title {
    text-align:center;
    padding-top:30px;
    padding-bottom:30px;
    font-family: 'nimbus-sans-condensed', sans-serif;
    font-size:55px;
    font-weight:bold;
    color: #fff;
}
.recentNews .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}
.recentNews .ct-blog {
    margin-bottom: 30px;
}
.ct-blog .inner {
    background-color: #FFF;
    padding: 10px;
    transition: all 0.2s ease-in-out 0s;
    cursor: pointer;
    height: 100%;
}
.ct-blog .inner:hover {
    background-color: #e6e6e6;
}
.ct-blog .fauxcrop {
    height: 180px;
    overflow: hidden;
}
.ct-blog .fauxcrop img {
    width: 100%;
}
.ct-blog-content {
    display: table;
    padding: 30px 0 28px;
}
.ct-blog-content .ct-blog-date {
    border-right: 1px solid #95A5A6;
    display: table-cell;
    font-family: "Lato", sans-serif;
    padding: 0px 18px 0px 15px;
    text-align: center;
}
.ct-blog-content .ct-blog-date span {
    font-size: 16px;
    color: rgb(20, 117, 175);  
    font-weight: 700;
    display: block;
    line-height: 1;
}
.ct-blog-content .ct-blog-date strong {
    font-size: 25px;
    color: rgb(20, 117, 175);  
}
.ct-blog-content .ct-blog-header {
    color: #000;
    display: table-cell;
    font-size: 22px;
    font-weight: 700;
    letter-spacing: -0.2px;
    line-height: 1.1;
    padding: 0 20px;
    vertical-align: top;
}
.btn-news {
    color: #333;
    font-size: 14px;
    font-weight: bold;
    padding-bottom: 30px;
    text-align: center;
}
.btn-news.btn-contests a {
    color: #fff;
    font-family: 'nimbus-sans-condensed', sans-serif;
    font-size: 24px;
    transition: all 0.2s ease-in-out 0s;
}
.btn-news.btn-contests a:hover {
    color: #000;
}
 
  .photo{
    position: relative;
    left:570px;
    width:400px;
    height: 200px;
    top:-50px;
  }
  .photo img{
    width:400px;
  }
  .photo{
    position: relative;
    left:570px;
    width:400px;
    height: 200px;
    top:-50px;
  }
  .photo img{
    width:400px;
  }
.topnav1{
    font-family: 'Raleway', sans-serif;
    color: #000;
    line-height: 1.6em;
    font-size: 16px;
    user-select: none;
    box-sizing: border-box;
    width: 100%;
    overflow: hidden;
    margin: auto;
    position:relative;
    top:-250px;
    
}
    .topnav1 #one,#two, #three, #four,#five,#six,#seven,#eight,#nine,#ten,#eleven,#twelve {
            
        text-align: justify;
  text-justify: inter-word;
  display: none;
  width: 57%;
  background :#EFEFEF;
   color:#000;
   cursor:pointer;

}
.topnav1 .btn1
{
    
    font-family: 'Raleway', sans-serif;
    color: #000;
    line-height: 1.6em;
    font-size: 16px;  
   width: 60%;
   padding: 8px 10px;
  
   border:0;
   background :#04AA6D;
   color:white;
   cursor:pointer;
   border-radius:3px;
   outline:none;
}
.topnav1 .btn1:hover
{
   background:#03885C;
   
    
}
#one1, #two1, #three1, #four1, #five1, #six1{
  font-size: 14px;
  color: #707070;
  
  text-align: center;
  display:none;
}
.view{
  cursor:pointer;
}
@media screen and (max-width: 768px) {
  .slide-content{
    margin: 0 10px;
  }
  .swiper-navBtn{
    display: none;
  }
}
</style>
</head>



<!--------------------------------------------------------------------------------------------->



<body>
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
$info= "SELECT * FROM reglog";
$mydata= mysqli_query($conn,$info);
$row = mysqli_fetch_array($mydata, MYSQLI_ASSOC);
?>
<div class="mobile-container">
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>

  <div id="myLinks">
  
    <a href="form.php">Pledge Organs</a>
    <a href="guide.php">Transplant Guide</a>
    <a href="donorCard.php">Donar Card Sample</a>
    <a href="transplant.php">Transplant Laws in India</a>
    <a href="DATA.php">Decreased Donors Data in India</a>
    <a href="activities.php">My activities</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>alert(Welcome <?php echo $row["userName"]; ?>)</script>
</div>



<!------------------------------------------------------------------------------------------------------------------>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="topnav">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="#memorial">Donors Memorial</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#articles">Recent articles</a>
      </li>
      
    
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#FAQs">FAQs <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  
  </div>
</nav>



<!---------------------------------------------------------------------------------------------------------------->



<div id="slideshow">
		<div class="slide-wrapper">
			<div class="slide">
				<img src="image/home.png" id="imagee" class="slide-number" style="width:100%;">
        <a id="btn1" class="slide-number" href="form2.php">Become a Donor</a>
				</img>
			</div>
			<div class="slide">
      <img src="image/RBC6.jpg" id="imagee" class="slide-number" style="width:100%;">
        <a id="btn1" class="slide-number">Share and spread Awareness</a>
</img>
			</div>
			<div class="slide">
      <img src="image/home1.png" id="imagee" class="slide-number" style="width:100%;">
        <a id="btn1" class="slide-number">Take a Survey</a>
</img>
			</div>
			
		</div>
	</div>



<!-------------------------------------------------------------------------------------------------------------->



<div class="jumbotron">
<h1>Donors Memorial</h1>
<p>&nbsp&nbsp"Through their selfless gifts, organ donors have forever changed lives and brought hope to countless individuals in need. Their compassionate act of giving has transformed &nbsp&nbsptragedy into a lifeline, uniting families and communities in gratitude and remembrance. We honor and celebrate these extraordinary individuals who have left a lasting legacy of &nbsp&nbsplove and generosity in the pursuit of saving lives."</p>
</div>
<div class="ARTICLES" id="memorial">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/d12.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/d2.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/d3.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/d41.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/d5.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/d61.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        
    </div>

    <!-- Swiper JS -->
    <script src="swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="script1.js"></script>




<!----------------------------------------------------------------------------------------------------->



<div class="jumbotron" id="about">
  <h1>Donorly</h1>
  <p>"Write a Story of Hope: Donorly - Empowering Organ Donation."</p>
</div>
<section class="my">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="image/human.png" class="img-fluid aboutimg">
        <p>                           </p>
        <img src="image/h12.png" class="img-fluid aboutimg">
        <p>                           </p>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2>Donorly</h2>
			<p class="py-3">  
        
The Donorly has been constituted by the Government of Karnataka for a sustained deceased donor (Cadaver) transplantation programme in the state of Karnataka.Donorly is the body appointed to oversee the implementation of the Transplantation of Human Organs Act of 1994. The organization aims to coordinate the deceased donor transplantation activities and also educate the public on organ donation.
<br><br>
The functions of donorly include, involving the hospitals for active participation of the deceased donor (Cadaver) program through promotional activities, seminars, workshops and educational programmes. The public awareness programme takes place through hospitals, educational institutions, corporates and non-governmental organizations along with media participation.
<br><br>
The mission of Donorly:<br>
1.To establish effective deceased donor (cadaver) organ procurement and just distribution of organs.
<br>2.To set up organ sharing by minimizing wastage of organs.
<br>3.To assure quality control by collection, analysis and publications of data on organ donation, procurement and transplantation.
<br>4.To increase public awareness.
<br>5.Donorly works through a team effort of participating hospitals for the achievement of a sustained cadaveric transplant programme. Jeevasarthakathe will be entirely responsible for managing the Karnataka State Organ and Tissue Sharing System and any other activity entrusted to it by the Health and Family Welfare Department of the State Government.
</p>
			<a href="about.php"> </a> 
			</div>
		</div>
	</div>
</section>


<!---------------------------------------------------------------------------------------------------------------------->



<div class="jumbotron" id="FAQs">
  <h1>FAQs</h1>
  <p>"Get answer to your questions and doubts."<br> Below are some of the Frequently Asked Questions.</p>
</div>
<section class="my">
<div class="jumbotron" id="about">

<!-- Top Navigation Menu -->

			<div class="photo">
				<img src="image/h4.png" class="img-fluid aboutimg">
        <p>                           </p>
        <img src="image/h5.png" class="img-fluid aboutimg">
        <p>                           </p>
        <img src="image/g5.png" class="img-fluid aboutimg">
        <p>                           </p>
			</div>
<div class="topnav1">
<p class="btn1" onclick="myFunction2(0)"><b>What is Organ Donation?</b></p>

<p id="one" >Organ donation is the entire practice of retrieving a human organ from a living or deceased person, who is referred to as a Donor, and transplanting it into a recipient. The recipient will be a patient who is suffering from organ failure and who will not survive unless she/he receives an organ replacement. The process of recovering organs is called Retrieval.</p>
  <p class="btn1" onclick="myFunction2(1)"><b>How many Types of Organ Donations are there?</b></p>
  <p id="two">Here are two types of organ donation – Live Donation &amp; Deceased or Cadaver Donation.<br>

  <strong>Living Organ Donation:</strong><br> This is when you retrieve an organ from a healthy living person and transplant it into the body of someone who is suffering from end-stage organ failure. This is commonly done in the case of a liver or a kidney failure (because the liver can grow back to its normal size and a donor can survive on one kidney).
Living donors are classified as either a near relative or a distant relative/friends etc.
A near-relative is spouse, son/daughter, brother/sister, parents, grandparents and grandchildren. Those other than near-relative can be distant relatives and friends who will need the permission of the State Authorization Committee to donate organs. If the hospital refuses to entertain such cases the patient may send a legal notice to the hospital for not following the Transplant Act.
<br><strong>Deceased Organ Donation: </strong><br>When we talk about pledging your organs for donation or about organ donation after death, we are talking about Deceased Organ Donation. This is an organ donation from a person who has been declared brain stem dead by a team of authorized doctors at a hospital. A person is said to be brain stem dead when there is an irreversible loss of capacity to breath.
<br>Donation after cardiac death is common in the West but in India it is rare for donations to take place after cardiac death.
<br>Although it is possible for organs such as the Liver and the kidney to be easily donated from a living donor to a recipient, we should work towards an environment where everyone donates their organs after their deaths (if they can), so no living person should have to donate an organ to another.<br>
<strong>What Organs Can Be Donated After Death?</strong><br>
All organs and tissues that are viable can be donated after a person dies.
</p>
<p class="btn1" onclick="myFunction2(2)"><b>What is Process of Organ Donation?</b></p>
<p id="three"></p>
<p class="btn1" onclick="myFunction2(3)"><b>What is Organ Donation?</b></p>
<p id="four"></p>
<p class="btn1" onclick="myFunction2(4)"><b>What is Organ Donation?</b></p>
<p id="five"></p>
<p class="btn1" onclick="myFunction2(5)"><b>What is Organ Donation?<</b></p>
<p id="six"></p>
<p class="btn1" onclick="myFunction2(6)"><b>What is Organ Donation?</b></p>
<p id="seven"></p>
<p class="btn1" onclick="myFunction2(7)"><b>What is Organ Donation?</b></p>
<p id="eight"></p>
<p class="btn1" onclick="myFunction2(8)"><b>What is Organ Donation?</b></p>
<p id="nine"></p>
<p class="btn1" onclick="myFunction2(9)"><b>What is Organ Donation?</b></p>
<p id="ten"></p>
<p class="btn1" onclick="myFunction2(10)"><b>What is Organ Donation?</b></p>
<p id="eleven"></p>
<p class="btn1" onclick="myFunction2(11)"><b>What is Organ Donation?</b></p>
<p id="twelve"></p>

</div>
</section>

</div>

</section>
<!----------------------------------------------------------------------------------------------------------------------------------->
<div id="articles">
<section class="recentNews">
  <div class="container">
    <h2 class="news-title">Recent Articles</h2>
    <div class="row">
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.thehindu.com/news/national/karnataka/families-of-last-years-151-organ-donors-felicitated-on-indian-organ-donation-day/article67154841.ece"><img alt="News Entry" src="image/article1.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>August</span><strong>03</strong>
            </div>
            <h3 class="ct-blog-header">
            Families of last year’s 151 organ donors felicitated on Indian Organ Donation Day
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://telanganatoday.com/national-organ-donation-day-harish-rao-felicitates-family-members-of-organ-donors"><img alt="News Entry" src="image/article2.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>August</span><strong>08</strong>
            </div>
            <h3 class="ct-blog-header">
            National Organ Donation Day: Harish Rao felicitates family members of organ donors
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.thehindu.com/news/national/karnataka/experts-bat-for-cadaver-organ-donation-to-save-lives/article67153825.ece"><img alt="News Entry" src="image/article3.jpeg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>august</span><strong>05</strong>
            </div>
            <h3 class="ct-blog-header">
            Experts bat for cadaver organ donation to save lives
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.thehindu.com/sci-tech/health/indias-poor-organ-donation-record-continues-to-cost-lives/article67161978.ece"><img alt="News Entry" src="image/article4.jpeg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>August</span><strong>07</strong>
            </div>
            <h3 class="ct-blog-header">
            Organ shortage continues to cost lives
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://www.newindianexpress.com/nation/2019/aug/14/organ-donation-in-india-less-than-one-per-million-population-donate-lowest-globally-2018844.html"><img alt="News Entry" src="image/article5.jpg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>july</span><strong>08</strong>
            </div>
            <h3 class="ct-blog-header">
            Organ Donation: In India less than one per million population donate, lowest globally
            </h3>
          </div>
        </div>
      </div>
      <div class="ct-blog col-sm-6 col-md-4">
        <div class="inner">
          <div class="fauxcrop">
            <a href="https://pubmed.ncbi.nlm.nih.gov/32605769/"><img alt="News Entry" src="image/article6.jpeg"></a>
          </div>
          <div class="ct-blog-content">
            <div class="ct-blog-date">
              <span>July</span><strong>16</strong>
            </div>
            <h3 class="ct-blog-header">
            Why NOTTO? The National Organ and Tissue Transplant Organisation and Why It Is Crucial to Regulate Organ Donation and Transplantation in India
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!------------------------------------------------------------------------------------------------------------------>
<footer>
    <div class="footer-content">
      <div class="footer-section">
        <h2>Contact Us</h2>
        <p>Helpline: <span id="contact-number">123-456-7890</span></p>
        <p>Head Office: New Horizon College,Opposite to WELLS FARGO ,Kadubesanalli,Bangalore-577231 </p>
      </div>
      <div class="footer-section">
        <h2>Follow Us</h2>
        <div class="social-media">
          <a href="#"><img src="image/f1.png" alt="Facebook"></a>
          <a href="#"><img src="image/tw1.png" alt="Twitter"></a>
          <a href="#"><img src="image/i1.png" alt="Instagram"></a>
        </div>
      </div>
      <div class="footer-section">
        <h2>About Us</h2>
        <p>Student at New Horizon College</p>
      </div>
    </div>
    <div class="footer-links">
    <a href="#">Home</a>
    <a href="#articles">Recent Aritcles</a>
    <a href="form1.php">Pledge Organs</a>
    <a href="#">Transplant Laws in India</a>
    <a href="#FAQs">FAQ</a>
      <a href="transplant.php">Terms and Conditions</a>
      <a href="#">Privacy Policy</a>
    </div>
    <p class="copyright">&copy; 12-08-2023 Donorly. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
<style>body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

footer {
  background-color: #18375f;
  color: #fff;
  text-align: center;
  padding: 20px 0;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-section {
  flex: 1;
}

#contact-number {
  font-weight: bold;
}

.social-media {
  margin-top: 10px;
}

.social-media a {
  margin: 0 5px;
}

.social-media img {
  width: 20px;
  height: 20px;
}

.footer-links {
  margin-top: 20px;
}

.footer-links a {
  color: #fff;
  text-decoration: none;
  margin: 0 10px;
}

.footer-content h2 {
  margin-bottom: 10px;
}

.footer-content p {
  margin: 0;
}

.footer-content .copyright {
  margin-top: 20px;
}

</style>
<!---------------------------------------------------------------------------------------------------------------->
<script>
  function myFunction2(p) {
    if(p==0){var A= "one";}
    else if(p==1){var A="two";} 
    else{var A="three";}
  var x = document.getElementById(A);
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
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

</body></html>