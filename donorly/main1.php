<?php 
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
    left:970px;
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
    background: transparent;
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
  background: transparent;

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
<div class="mobile-container">
<div class="topnav">
<a href="#home" class="active"><img src="image/logo.jpg" width="30" height="30" class="rounded-circle">DONORLY</a>

  <div id="myLinks">
    <a href="login.php">Pledge Organs</a>
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



<!------------------------------------------------------------------------------------------------------------------>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="topnav">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#donors">Donors Memorial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#FAQs">FAQs <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#articles">Recent articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
    </ul>
  
  </div>
</nav>



<!---------------------------------------------------------------------------------------------------------------->



<div id="slideshow">
		<div class="slide-wrapper">
			<div class="slide">
				<img src="image/home.png" id="imagee" class="slide-number" style="width:100%;">
        <a id="btn1" class="slide-number" href="form1.php">Become a Donor</a>
				</img>
			</div>
			<div class="slide">
      <img src="image/RBC6.jpg" id="imagee" class="slide-number" style="width:100%;">
        <a id="btn1" class="slide-number" href="awareness.php">Share and spread Awareness</a>
</img>
			</div>
			<div class="slide">
      <img src="image/home1.png" id="imagee" class="slide-number" style="width:100%;">
        <a id="btn1" class="slide-number" href="survey.php">Take a Survey</a>
</img>
			</div>
			
		</div>
	</div>



<!-------------------------------------------------------------------------------------------------------------->
<p>           </p>
<div class="cont">
<iframe width="800" height="400" src="https://www.youtube.com/embed/D7BbDAf5SPc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="center"  ></iframe>   
      <style>
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  
}
.cont{
background: radial-gradient(circle, rgba(246,226,246,1) 30%, rgba(3,204,209,1) 66%, rgba(10,205,210,1) 79%, rgba(255,0,202,1) 98%);
}
</style>
</div>






<!----------------------------------------------------------------------------------------------------------------------->


<div class="jumbotron" id="donors">
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
                                <img src="image/d2.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mr. Veeraragavan   - 45 Years</h2>
                            <p class="description" >As a gardener in a in a Government School, near Tambaram the 45 year old Veeraragavan, was looking after his two daughter.

</p>
<p id="one1"> On June 22, 2014 after finishing his work, Mr. Veeraragavan got drunk and fell down into an empty well in the garden, and sustained a head injury with bleeding. He was admitted in Rajiv Gandhi Government General Hospital (RGGGH) for treatment. After two days of treatment he stopped responding and was declared brain dead. He had lost his wife a few years ago. His daughters were studying in 5th and 6th standard, and he cared for them. His entire family was waiting in the corridors for a positive word from the doctor. The transplant coordinator explained to them about the condition of the patient, the family were not able to accept it. They were thinking about his young daughters, who had recently lost their mother and said that If we go and inform them about the father's demise, it will be really tragic for them. His elder brother Sadayandi and uncle slowly realized the situation and gave consent for organ donation.

Mr. Sadayandi wanted the girls to know the good deed of their father We believe that their parents will guide and shower the blessing to their children to come up in life. So Mr. Veeraragavan's daughters came to see their father in ICU. They understood that father was no more with them to teach, to play and to care for them. The two girls took the news stoically so much so that it moved each and every one in the hospital. The daughters felt very proud about their father and they consider his as a Super Hero for saving so many lives.

We respect Mr. Veeraragavan's family for their courageous decision and for giving new life. He gave a second chance at life to four patients.
<br>Place : Chennai

<br>Brother's Name      : Mr. Sadayandi</p>
                            <button class="button" onclick="myFunction3(0)" id="view">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="image/d12.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Vani Raj   - 48 Years</h2>
                            <p class="description">Vani raj was a Homeopath who practiced her profession with her husband (who is also a doctor) in her own clinic in Model Town, Delhi.</p>
                            <p  id="two1">A spiritual and altruistic person at heart, she would rise as early as 5 every morning, go for a stroll with her husband, cook for the family, manage the household after which she would rush to the clinic every single day working to better the conditions of her many patients.

So it was nothing less than an irony of fate when she herself was brought into emergency of a private hospital in an unconscious state on July 29, 2012. The doctors worked hard to resuscitate her, but then Mrs Gupta had already slipped into the irreversible condition that is Brain death at the age of 59 years. The family was inconsolable, but being a family of doctors they understood the reality of the situation.

The elder daughter and her husband (both physicians) were spoken to and counselled for organ donation by the Transplant Coordinator. They understood brain death and seemed open to the idea of organ donation. However, they were not too sure how the patients husband would respond to the same. However, the husband, Mr Gupta was also spoken to and he agreed too. He said, “My wife would have wanted to donate her organs. He also shared how his wife had run around when his father died to donate the corneas. However it could not be done as there had been a sufficient delay. Other family members joined, younger daughter, her husband and her in-laws and some extended family. They were all explained the concept of brain death, how organ donation would take place, which all organs would be retrieved, etc. They were shown an animation of brain death as well so that there was complete clarity in their minds. They took the brave yet difficult decision to donate her organs.

The family shared that they had seen the standee outside the ICU bearing a message on organ donation and had begun to discuss the possibility amongst themselves. Her patients have expressed immense grief and lose since her absence in the clinic, but then even in death she healed the lives of many.
</p>
                            <button class="button" onclick="myFunction3(1)" id="view">View More</button>
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
                            <h2 class="name">Mr. Kasinathan   - 50 Years</h2>
                            <p class="description">Mr. Kasinathan, 50, who was working as a watchman met with an accident near Kattupakkam on 21.07.2010. </p>
                            <p  id="three1"> He was rushed to the local hospital immediately and was then shifted to the Government. General Hospital, Chennai. After a thorough clinical examination, the doctors from the hospital declared him brain dead. The whole family was shattered when they heard that there was no hope of recovery for their loved one. The transplant coordinator from MOHAN Foundation counselled the family and gave them the option of donating Mr. Kasinathan's organs. Mr. Velu, the elder son took it upon himself to make his family members understand the concept. The whole family was moved by the noble cause of organ donation and gave their consent. Our father might have left us, but we all believe that his soul is still alive. He will live forever in this universe through this incredible act of organ donation, said Mr. Kesavan, second son of Mr. Kasinathan.</p>
                            <button class="button" onclick="myFunction3(2)" id="view">View More</button>
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
                            <h2 class="name">Mr.Sandiyappan   - 57 Years</h2>
                            <p class="description">Mr.Sandiyappan, 57, a railway employee met with a road traffic accident and was declared brain dead at the Government General Hospital, Chennai.</p>
                            <p id="four1">His son and the other family members gave their consent for organ donation when the transplant coordinators explained the concept to them. As a father of five children, Mr.Sandiyappan gave life to five more people by donating his organs.</p>
                            <button class="button" onclick="myFunction3(3)" id="view">View More</button>
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
                            <h2 class="name">Mr. R. Loganathan   - 52 Years</h2>
                            <p class="description">Mr. R. Loganathan met with an accident in the evening of 11th June 2014 and was declared brain dead at the Rajiv Gandhi Government General Hospital on 16th June 2014.
</p>
                            <p id="five1">This young man hailing from Kancheepuram district was working as a driver for a private company biding his time till he got a job of his choice. He was the only child of Rajalakshmi, a primary health care nurse. When the counsellors spoke with the mother she recalled that he was a humble and helpful person and loved by all in their village. The mother said that he was very kind in nature.

Even though she was very upset after hearing the shocking news she decided to save others by donating her son's organs. The mother believes that that Loganathan's life has been passed into 5 people, and if she does any of the end of life rituals they may affect the recipient's health. And so she has not done the funeral rituals for her son.

She said that this is very big loss for them yet she feels very proud of her son, who helped other families. During the donation the Chennai city police cleared the roads for the transport of vital organs and made a 'green corridor' for the ambulance. Mr. Loganathan's heart, liver, kidneys, skin and corneas were donated. We salute Mr. Loganathan's mother, for her courageous decision.

This young engineering diploma holder gave life to 5 patients suffering from organ failure. Local and National media highlighted this donation and spread the awareness to all over India.
</p>
                            <button class="button" onclick="myFunction3(4)" id="view">View More</button>
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
                            <h2 class="name">
Mr. S. Ramalingam   - 89 Years</h2>
                            <p class="description">On 17th June 2021, Ms. Ishwarya Thyagarajan received a call on the Helpline around 1 PM in the afternoon from Kodambakkam in Chennai, Tamil Nadu.</p>
                            <p id="six1">The deceased, Mr. S Ramalingam, born in 1932, had registered for voluntary body donation at his village, and his son wanted to carry out his father's wishes. He had reached out to the 104 helpline of the state government and was asked to call MOHAN Foundation.

Ishwarya tried reaching out to the three government medical college hospitals of the state to coordinate. While one hospital responded by saying that they have temporarily stopped accepting donations owing to the pandemic, the other two were unreachable. She then reached out to Dr. Mallikesan from the Anatomy department of Sri Ramachandra Hospital who offered to coordinate with the family.

The family was requested to talk to Dr. Mallikesan and the donation formalities were successfully completed by 5 PM in the evening. Mr. Rebelson sent a heartfelt thank you message appreciating the efforts of the Foundation.</p>
                            <button class="button" onclick="myFunction3(5)" id="view">View More</button>
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


<div class="texture">
<div class="jumbotron" id="FAQs">
  <h1>FAQs</h1>
  <p>"Get answer to your questions and doubts."<br> Below are some of the Frequently Asked Questions.</p>
</div>
<section class="my">
<div class="jumbotron">

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
<p class="btn1" onclick="myFunction2(2)"><b>Is there disfigurement during organ donation?</b></p>
<p id="three">The donor's body is not disfigured. Only a small-cut is made like during a surgery.</p>
<p class="btn1" onclick="myFunction2(3)"><b>Who is a brain-dead patient?</b></p>
<p id="four">A brain-dead person is a person whose brain-stem is no longer functioning and where there is no scope for recovery. Brain-dead patients are kept on the support of a ventilator.

Brain stem is an important part of the brain that sustains life. A brain stem dead person is an unconscious, dependent patient, who cannot breathe on his own and is breathing through a ventilator, even though one can feel his pulse, blood pressure and other sign of life. The lack of functioning of the brain stem is a sign of death and the rest of the body will eventually stop functioning even if the ventilator is continued.

It is different between coma patients and brain dead individual. The coma patient is not dead whereas brain stem death is the irreversible stage beyond coma, as the person can either regain consciousness nor breathing capability. The heart can continue to function due to a ventilator for a few hours to few days & it is during this period that the organs can be retrieved after obtaining consent from the close relatives. Organs are never taken at the cost of donor's life.</p>
<p class="btn1" onclick="myFunction2(4)"><b>What is the law that governs organ donation?</b></p>
<p id="five">The Transplantation of Human Organs Act, 1994 and it's future amendments - with last being in 2011 along with The Transplantation of Human Organs Rules, 1995 and it's future amendments, govern the organ transplantations that happen in India.<br>
<a href="transplant.php">for more Information on legal Terms</a> </p>
<p class="btn1" onclick="myFunction2(5)"><b>Are organs sold?</b></p>
<p id="six">Selling and buying of organs in strictly prohibited in India. It is a punishable offence for which one can be sent to up to 10 years imprisonment and be asked to pay a fine of up to â‚¹20lakhs (was 5 years and â‚¹10,000 when the Act commenced). Also, under Section 370 of The Indian Penal Code, a person who does force removal or organs (without consent) is liable to be sentenced to jail for 7-10 years and a fine.</p>
<p class="btn1" onclick="myFunction2(6)"><b>How long after death can organs be donated?</b></p>
<p id="seven">These are the times for which different organs can stay out of the human body:

Lung - 4 to 6 hours
Heart - 4 to 6 hours
Liver - 24 hours
Pancreas - 24 hours
Kidney - 72 hours
Cornea - 14days
Bones - 5 years
Skin - 5 years
Heart Valves - 10 years</p>
<p class="btn1" onclick="myFunction2(7)"><b>Who will receive the donated organs?</b></p>
<p id="eight">There are a few steps for the receiving of organs that are as below:

Name of the recipient has to be registered as a cadaver organ receiver in organ transplant institute.

There is a committee formed who takes appropriate decision in the selection of the recipient based on a few criteria such as age, employed or unemployed, time since dialysis commenced, family donor, any previous transplants etc.

The organs will be transplanted into those patients who need them most urgently. Recipient selection is based on medical criteria like blood group, the result of cross-matching and body size. Social and financial status is never a criterion in selecting recipients.</p>
<p class="btn1" onclick="myFunction2(8)"><b>Can someone jump the waiting list if they are influential?</b></p>
<p id="nine">No, this is strictly prohibited in India. The criteria are pre-defined and it depends upon the date of registration and medical condition.</p>
<p class="btn1" onclick="myFunction2(9)"><b>Are all hospitals equipped to carry out organ transplantation?</b></p>
<p id="ten">No, only those hospitals that have registered as per the law laid down by the THOA can carry out the procedure of organ transplantation. Removal of organs without authority attracts a penalty that may lead to permanent de-registration of the hospital.<br>
<a herf="#transplantcenters">Click here to see the Transplant Hospitals by City</a></p>
<p class="btn1" onclick="myFunction2(10)"><b>Can I be a donor if I have been rejected to donate blood?</b></p>
<p id="eleven">Yes. There may be specific reasons why it has not been possible to donate blood, such as having anaemia or had a blood transfusion or temporary health condition. Sometimes a simple thing like a cold or medication that you are taking can prevent you from donating blood.</p>
<p class="btn1" onclick="myFunction2(11)"><b>Why should you donate organs?</b></p>
<p id="twelve">Because you can give a gift of life to someone else who is waiting for it. Because, after death, the organs will be of no use to you but will be life-changing for the person who receives your organs.</p>

</div>
</div>
</section>
</div>
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
<!------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------------------------------------------->
<script>
  function myFunction2(p) {
    if(p==0){var A= "one";}
    else if(p==1){var A="two";} 
    else if(p==2){var A="three";}
    else if(p==3){var A="four";}
    else if(p==4){var A="five";}
    else if(p==5){var A="six";}
    else if(p==6){var A="seven";}
    else if(p==7){var A="eight";}
    else if(p==8){var A="nine";}
    else if(p==9){var A="ten";}
    else if(p==10){var A="eleven";}
    else {var A="twelve";}
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
<script>
   function myFunction3(p) {
    if(p==0){var A= "one1";}
    else if(p==1){var A="two1";} 
    else if(p==2){var A="three1";}
    else if(p==3){var A="four1";}
    else if(p==4){var A="five1";}
    else {var A="six1";}
  var x = document.getElementById(A);

  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
    
  }
}
</script>
<?php require 'Footer1.php'; ?>
</body></html>