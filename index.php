<!DOCTYPE html>
<html>
<title>Students Care Teaching center</title>
<link rel="icon" href="img/logo.png" type="img" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.6;
}

/* Full height image header */

.w3-bar .w3-button {
  padding: 16px;
  font-weight: bold;
  color: #420a0f;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:800px) {
  .column {
    width: 100%;
  }
}




</style>
<body>
<!-- Navbar (sit on top) -->

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">

    <img style="width: 7%;margin-top: 10px;margin-left: 10px;cursor: none;" class="w3-animate-zoom" src="img/logo.png">
   <!--
    <a href="" class="w3-bar-item w3-button w3-wide"></a>
     Right-sided navbar links
      -->
    <div class="w3-right w3-hide-small w3-hide-medium">
      <h4 style="color: #d78;cursor: none; text-align: center;font-family: Helvetica;text-shadow: 2px 2px 5px blue;" class="w3-animate-zoom"><b>Helpline:  </b><span style="font-size: 22px;font-family: Times New Roman red Serifs;" >  <b>01890 015606 / 01309 423766</b> </span></h4>
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#course" class="w3-bar-item w3-button">OUR COURSES</a>
      <a href="admissionform.php" class="w3-bar-item w3-button">ADMISSION FORM</a>
      <a href="payment.php" class="w3-bar-item w3-button">PAYMENT</a>
      <a href="#teacher" class="w3-bar-item w3-button"> TEACHERS</a>
      <a href="#gallery" class="w3-bar-item w3-button">GALLERY</a>
      <a href="#contact" class="w3-bar-item w3-button"> CONTACT</a>
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<div class="notice">
  
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left  w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#index" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#course" onclick="w3_close()" class="w3-bar-item w3-button">OUR COURSES</a>
  <a href="#teacher" onclick="w3_close()" class="w3-bar-item w3-button">Teacher</a>
  <a href="#gallery" onclick="w3_close()" class="w3-bar-item w3-button">Gallery</a>
  <a href="admissionform.php" onclick="w3_close()" class="w3-bar-item w3-button">Apliction Form</a>
  <a href="payment.php" class="w3-bar-item w3-button">Payment</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
<!-- Header with full-height image -->
<!-- Page content -->
<div class="w3-content w3-padding-64" id="index" style="max-width:2000px;border:3px solid #345; background-color:#475665;">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="img/classroom.jpg" style="width:99%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/prime.jpg" style="width:99%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     <h2>Our Prime Minister with dipu moni</h2>
          
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/s3.jpg" style="width:99%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Office room</h3>
      
    </div>
  </div>
</div>

  
<!-- About Section -->

<div class="w3-main" id="about" style="margin-left:5px">
<h3 style="text-align: center;color: purple">ABOUT US</h3>
  <div class="w3-row w3-padding-64">
    <div class="w3-quarter w3-container w3-border w3-animate-left">
     <h2 style="text-align: center;color: #907090;background-color: #345;font-family: Sans-serif;">important Website </h2> 
<hr>

    <a style="color: #000;" href="http://www.educationboard.gov.bd/">Education Board</a> 
     <br>
  
  <a style="color: #000;" href="http://www.educationboardresults.gov.bd"> Education Board Results</a><br>
  
  <a style="color: #000;" href="http://www.dinajpureducationboard.gov.bd/">Dinajpur Education Board</a><br>
  <a style="color: #000;" href="http://www.bteb.gov.bd">Bangladesh Technical Education Board</a><br>
  <a style="color: #000" href="http://www.eduicon.com/Institute/More/?page=intermediate_college.php&Board_ID=6">All Intermediate College Under Dinajpur Board</a>
   
  

    </div>
    <div class="w3-half w3-container w3-animate-zoom">
      <h1 style="font-size: 20px;font-family: Georgia;text-shadow: 2px 2px 5px ;" class="w3-text-teal">কিছু কথা</h1>
      <p style="font-family: Times New Roman;font-size: 18px;">সৃষ্টির ঊষালগ্ন থেকেই মানুষ নিজেকে অন্যের কাছে প্রকাশ করতে চায়। এ প্রকাশ করতে চাওয়া মানুষের একটি সহজাত গুণ। কোমলমতি ছাত্র-ছাত্রীদের এ সহজাত প্রবৃত্তিকে বিকশিত করতে যুগোপযোগী শিক্ষার মাধ্যমে ‘স্টুডেন্টস্ কেয়ার টিচিং সেন্টার’ দেশের যোগ্য নাগরিক গড়ে তোলার ক্ষেত্রে বদ্ধ পরিকর।ছাত্র ছাত্রীদের যাতায়াতের সুবিধার জন্য রয়েছে বিশেষ পরিবহন ব্যবস্থা। ডিজিটালতার ছোয়ায় সিসিটিভি এর মাধ্যমে সার্বক্ষণিক ক্লাস রুম মনিটরিং।পাঠ্যবই এর পাশাপাশি ব্যাবহারিক শিক্ষা দানের জন্য রয়েছে আইসিটি ব্যাবহারিক ক্লাস ও অভিজ্ঞ শিক্ষক।অভিভাবকদের মতামতের ভিত্তিতে এবং অভিজ্ঞ শিক্ষকদের দ্বারা পরিচালিত ‘স্টুডেন্টস্ কেয়ার টিচিং সেন্টার’। ধন্যবাদ</p>
    </div>
          
    <div class="w3-quarter w3-container w3-border w3-animate-right">
     <h2 style="text-align: center;color: #907090;background-color: #345">Notice Board</h2> 
<?php include 'classes/Notice.php'; ?>
     <?php 
     $nb = new Notice();
              $getNB = $nb->getAllNotice();
            if ($getNB) {
              $i=0;
              while ($result = $getNB->fetch_assoc()) {
                $i++;
                  ?>
<hr>
<marquee onmouseover="this.stop();"onmouseout="this.start();" direction="up">
    <p style="color:white; padding-left:10px; padding-top:4px; margin-top: 1px; background-color: #211a16;font-family:Georgia "><?php echo $result['nboard'] ;?></p>
   </marquee>
 <?php } } ?>
    </div>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-16 w3-center w3-panel w3-teal" id="team">
<h2>OUR LEADERSHIP</h2>
<div style="border-top: 1px dashed #fff" class="w3-row"><br>
  <div class="w3-center">
  <img  src="img/aminul.jpg" alt="aminul islam" style="width:20%;" class="w3-round w3-margin-bottom w3-hover-opacity">
  <h4 style="color: #18202f;font-family: Alfa Slab One"><b>সভাপতি</b></h4>
  <h5 style="font-family: Bitter;line-height:.9;color: #232122; "><b> মোঃ আমিনুল ইসলাম
</b></h5>
<h5 style="font-family: Bitter;line-height:.9;color: #232122; ">মোবাইল : ০১৭৫০৪৮১৩৬৫</h5>
  <p style="font-family:Alfa Slab One ;font-size: 18px;line-height: 1.1;color: #19203f">স্টুডেন্টস্ কেয়ার টিচিং সেন্টার তাম্বুলপুর, পীরগাছা, রংপুর</p>
</div>
</div>
<hr>
<div style="" class="w3-row"><br>
<div class="w3-third">
  <img  src="img/ripon.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h4 style="color: #18202f;font-family: Alfa Slab One"><b>পরিচালক</b></h4>
  <h5 style="font-family: Bitter;line-height:.9;color: #232122; "><b>মোঃ রিপন মাহমুদ (রিয়াদ)
</b></h5>
<h5 style="font-family: Bitter;line-height:1.4;color: #232122; ">মোবাইল : ০১৭৪০৪৭৮৫১৪
</h5>
  <p style="font-family:Alfa Slab One ;font-size: 18px;line-height: 1.1;color: #19203f">স্টুডেন্টস্ কেয়ার টিচিং সেন্টার তাম্বুলপুর, পীরগাছা, রংপুর</p>
</div>
<div class="w3-third">
  <img  src="img/mydul.jpg" alt="Mydul islam" style="width:45%" class="w3-circle w3-hover-opacity">
  <h4 style="color: #18202f;font-family: Alfa Slab One"><b>কোষাধ্যক্ষ </b></h4>
  <h5 style="font-family: Bitter;line-height:.9;color: #232122; "><b>এম.আর মাইদুল ইসলাম
</b></h5>
<h5 style="font-family: Bitter;line-height:1.4;color: #232122; ">মোবাইল : ০১৩০৯৪২৩৭৬৬
</h5>
  <p style="font-family:Alfa Slab One ;font-size: 18px;line-height: 1.1;color: #19203f">স্টুডেন্টস্ কেয়ার টিচিং সেন্টার তাম্বুলপুর, পীরগাছা, রংপুর</p>
</div>
<div class="w3-third">
  <img  src="img/sukdeb.jpg" alt="Shukdeb " style="width:45%" class="w3-circle w3-hover-opacity">
  <h4 style="color: #18202f;font-family: Alfa Slab One"><b>ব্যবস্থাপক </b></h4>
  <h5 style="font-family: Bitter;line-height:.9;color: #232122; "><b>শুকদেব চন্দ্র বর্মন
</b></h5>
<h5 style="font-family: Bitter;line-height:1.4;color: #232122; ">মোবাইল : ০১৭৫৫১৯৩৩২০
</h5>
  <p style="font-family:Alfa Slab One ;font-size: 18px;line-height: 1.1;color: #19203f">স্টুডেন্টস্ কেয়ার টিচিং সেন্টার তাম্বুলপুর, পীরগাছা, রংপুর</p>
</div>





</div>
</div>



<!-- Skills Section -->
<div class="w3-container w3-light-blue">

    <div class="w3-row">
      <h1 style="color: #b4b4;border-bottom: 1px dotted yellow" class="w3-center"> <span style="color: #a1a2a3">স্বপ্নপূরণে যা সহায়ক</span></h1>

      <div style="border-right: 2px solid white" class="w3-container w3-third">
        <h5 style="text-align: center;color:purple"><b>মেধার পরিচর্যা</b></h5>
        <p style="color: #456098;font-size: 18px">মেধার বিকাশ ও মূল্যায়নে প্রয়োজন মানসম্পন্ন পরীক্ষা, প্রতিটি পরীক্ষার উত্তরপত্র, মেধা তালিকার ভিত্তিতে বিশেষ ব্যাচ, পরীক্ষাভিত্তিক ও জাতীয় মেধাবৃত্তি</p>
        <img src="img/knowldge.svg" style="width: 100%">
       
      </div>
      <div style="border-right: 2px solid white" class="w3-container w3-third">
        <h5 style="text-align: center;color:purple"><b> অভিজ্ঞ শিক্ষকমণ্ডলী</b> </h5>
        <p style="color: #456098;font-size: 18px">শিক্ষার্থীদের মানসম্পন্ন শিক্ষা প্রদানের জন্য ‘স্টুডেন্টস্ কেয়ার টিচিং সেন্টারের’ রয়েছে অভিজ্ঞ শিক্ষক মন্ডলী। যাঁরা প্রতিনিয়ত শিক্ষার্থীদের সুষম প্রস্তুতি নিশ্চিত করে থাকেন।</p>
        <img src="img/teachers.svg" style="width: 100%">
      </div>
      <div class="w3-container w3-third">
        <h5 style="text-align: center;color:purple"><b>প্রযুক্তি সেবা</b></h5>
        <p style="color: #456098;font-size: 18px">প্রযুক্তির ইতিবাচক ব্যাবহারকে নিশ্চিত করতে  ভিডিও ক্লাস, সিসি টিভি দ্বারা ক্লাস মনিটরিং,SMS-এ রেজাল্ট এবং Website এর মাধ্যমে ভর্তি ও প্রয়োজনীয় নোটিশ প্রদান</p>
        <img src="img/ict.svg" style="width: 100%">
        
      </div>
      <hr>
    </div>
  </div>


<!--  Section2 -->
<div class="w3-container w3-center w3-light-grey" style="padding:32px 2px">
  <h3 class="w3-bottombar w3-border-gray"><b><span style="color: #257915;font-family: Arial"> এক নজরে জীবন নির্দেশিকা</b></h3>
  <div class="w3-row-padding" style="margin-top:6px">
    
    <div class="w3-third w3-section w3-card-4 w3-grayscale">
      <img src="img/learning.jpg" alt="Nature" style="width:95%;margin-top: 10px">
      <div class="w3-container">
      <h3><b><span style="color: #0d7032">কীভাবে আবিষ্কার করবে নিজের লার্নিং স্টাইল?</span></b></h3>
      <h5>Title description, <span class="w3-opacity">September 28, 2019</span></h5>
    </div>
     <div class="w3-container">
      <h4 style="color: #c099;font-family: Trebuchet MS, Helvetica, sans-serif">প্রতিটি মানুষই কিছু না কিছু ভিন্ন ভিন্ন উপায়ে শেখে। কেউ শুনে শুনে খুব ভালো শেখে, যখন আবার কেউ শেখে দেখে দেখে। তবে, অধিকাংশ লোকই ‘শুনে, দেখে, হাতে-কলমে’ ....</h4>
      <div class="w3-row">
        <div class="w3-col m10 s12">
         <a href="learn.php"><p><button class="w3-button w3-padding-large w3-black w3-border"><b>READ MORE »</b></button></p></a> 
        </div>
        
      </div>
    </div>
    </div>
    <div class="w3-third w3-section w3-card-4  w3-grayscale">
      <img src="img/madamkuri.jpg" alt="Nature" style="width:95%;margin-top: 10px">
      <div class="w3-container">
      <h3 style="color: #0d7032"><b>‘মাদাম কুরি’ হতে পারে তোমার জীবনের  অনুপ্রেরণা</b></h3>
      <h5>Title description, <span class="w3-opacity">October , 02 , 2019</span></h5>
    </div>
     <div class="w3-container">
      <h4 style="color: #c099">‘মাদাম কুরি’ একজন মহীয়সী নারী বিজ্ঞানী । তিনি একটি নয়, দু-দুটো নোবেল পেয়েছিলেন, একটি পদার্থ বিজ্ঞানে(১৯০৩) অন্যটি রসায়নে(১৯১১)। তিনিই নোবেল বিজয়ী প্রথম নারী এবং দু’টি নোবেল ....
       </h4>
      <div class="w3-row">
        <div class="w3-col m10 s12">
         <a href="story1.php"> <p><button class="w3-button w3-padding-large w3-black w3-border"><b>READ MORE »</b></button></p></a>
        </div>
        
      </div>
    </div>
    </div>
    <div class="w3-third w3-section w3-card-4 w3-grayscale">
      <img src="img/sofolota_tips1.jpg" alt="Nature" style="width:95%;margin-top: 10px">
      <div class="w3-container">
      <h3 style="color: #0d7032"><b>যেকোন কাজে সফলতা পেতে হলে থাকা চাই ৫টি গুণ</b></h3>
      <h5>Title description, <span class="w3-opacity">October , 05 , 2019</span></h5>
    </div>
     <div class="w3-container">
      <h4 style="color: #c099">জীবনের প্রতিটি ক্ষেত্রে সবাই সাফল্যের দেখা পেতে চায়; কিন্তু, কজনাই বা সেই সাফল্যের স্বর্ণতোরণে পৌঁছাতে পারে? খুব সামন্য কজন, তা নায় কি? কিন্তু কেনো? ....</h4>
      <div class="w3-row">
        <div class="w3-col m12 s12">
         <a href="sofolota.php"> <p><button class="w3-button w3-padding-large w3-black w3-border"><b>READ MORE »</b></button></p></a>
        </div>
        
      </div>
    </div>
    </div>
  </div>
</div>


<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" style="background-color:#4CAF50" id="course">
    <h2 style="font-weight: bold;">Course Details</h2>
    <p style="font-family:Georgia;color: #f6f6f6">Choose a Category & click Amission to confirm your seat.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">School</p>
        </li>
        <li class="w3-padding-16"><b>All Classes</b></li>
        <li class="w3-padding-16"><b>PSC Prepration</b></li>
        <li class="w3-padding-16"><b>JSC Prepration</b></li>
        <li class="w3-padding-16"><b>SSC Prepration</b></li>
       
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i><a href="admissionform.php"> Admission Now</a></button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Madrash</p>
        </li>
        <li class="w3-padding-16"><b>All Classes</b></li>
         <li class="w3-padding-16"><b>PSC Prepration</b></li>
        <li class="w3-padding-16"><b>JDC Prepration</b></li>
        <li class="w3-padding-16"><b>Dakhil Prepration</b></li>
        <li class="w3-theme-l5 w3-padding-24">
      <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> <a href="admissionform.php"> Admission Now</a></button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Comming Soon</p>
        </li>
        <li class="w3-padding-16"><b>All Subject</b></li>
        <li class="w3-padding-16"><b>HSC</b></li>
        <li class="w3-padding-16"><b>ALIM</b></li>
        <li class="w3-padding-16">
          <h4 class="w3-wide"><i class="fa fa-usd"></i> 00.00</h4>
          <span class="w3-opacity">Total Course Fee</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Admission Now</button>
        </li>
      </ul>
    </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px;background-color: #42414005" id="teacher">
<h3 class="w3-center" style="color: #4cb1a8;text-shadow: 3px 3px 7px gray"><b>OUR TEACHERS</b></h3>
  
<div style="border-top: 1px dashed #fff" class="w3-row"><br>
  <div class="w3-center">
  <img  src="img/man-icon.png" alt="aminul islam" style="width:20%;" class="w3-round w3-margin-bottom w3-hover-opacity">
    <h5 style="font-family: Bitter;line-height:.9;color: #232122; "><b>শ্রীঃ শিব কুমার চক্রবর্তী</b></h5>
  <h4 style="color: #18202f;font-family: Alfa Slab One">প্রধান শিক্ষক (স্টুডেন্টস্ কেয়ার টিচিং সেন্টার)</h4>
  <p style="font-family:Alfa Slab One ;font-size: 18px;line-height: 1.1;color: #19203f">অবসরপ্রাপ্ত সহকারী প্রধান শিক্ষক কাশিয়াবাড়ী উচ্চ বিদ্যালয়</p>
</div>
</div>
  <div class="w3-row-padding " style="margin-top:64px">
    

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
        <center><img  src="img/ripon.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"></center>
          <h3>মোঃ রিপন মাহমুদ (রিয়াদ)</h3>
          <p class="w3-opacity">জেনারেল ইংলিশ লেকচারার </p>
          <p>পীরগাছা সরকারি কলেজ</p>
          
        </div>
      </div>
    </div>


    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
         <center><img src="img/mr.jpg" alt="mydul" style="width:45%" class="w3-circle w3-hover-opacity"></center>  
           <h3>এম.আর মাইদুল ইসলাম</h3>
          <p class="w3-opacity">(বি এস এস/বি এ)</p>
          <p>পীরগাছা/গাইবান্ধা সরকারি কলেজ</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
<center><img  src="img/sukdeb.jpg" alt="Shukdeb " style="width:45%" class="w3-circle w3-hover-opacity"></center>          
           <h3>শুকদেব চন্দ্র বর্মন</h3>
          <p class="w3-opacity">(বি এস সি/আর এম পি)</p>
          <p>লালমনিরহাট সরকারি কলেজ,লালমনিরহাট</p>
        </div>
      </div>
    </div>

      <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-white">
 <center><img src="img/rimon.jpg" alt="M H rimon Khan" style="width:45%" class="w3-circle w3-hover-opacity"></center>  
        <div class="w3-container">
          <h3>এম এইচ রিমন খান </h3>
          <p class="w3-opacity">বি এস সি (কম্পিউটার সাইন্স এন্ড ইন্জিনিয়ারিং)</p>
          <p style="font-family: Arial">ড্যাফোডিল ইন্টারন্যাশনাল ইউনিভার্সিটি, ঢাকা</p>
          
        </div>
      </div>
    </div>

  </div>

   <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
     <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
<center><img src="img/monir.jpg" alt="monirul" style="width:45%" class="w3-circle w3-hover-opacity"></center>             
          <h3>মোঃমনিরুল ইসলাম </h3>
          <p class="w3-opacity">বিএ</p>
          <p>পীরগাছা সরকারি কলেজ</p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
<center><img src="img/monira.jpg" alt="monira " style="width:45%" class="w3-circle w3-hover-opacity"></center>  
          <h3>মোছাঃ মনিরা বেগম </h3>
          <p class="w3-opacity">বিএসএস</p>
          <p>পীরগাছা সরকারি কলেজ </p>
        </div>
      </div>
    </div>
   
  
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
  <center><img src="img/duku.jpg" alt="duku " style="width:45%" class="w3-circle w3-hover-opacity"></center>          
          <h3>মোঃ মশিউর রহমান(দুখু) </h3>
          <p class="w3-opacity">এইস.এস.সি</p>
          <p>পীরগাছা সরকারি কলেজ</p>
        </div>
      </div>
    </div>
   
  </div>
 

</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-16">
  <h3 style="text-align: center;">We Deliver Excellent Service For Psc Jsc/Jdc Ssc/Dakhil</h3>
  <hr>
  
  <div class="w3-quarter">
    <h2 class="w3-xxlarge counter">18</h2>
    <h4>Teacher</h4>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge counter">120</span>
    <h4>Students Capacity</h4>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge counter">168</span>
    <h4>Total Lecture</h4>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge counter">03</span>
    <h4>Model Test</h4>
  </div>
</div>

<!-- Work Section -->
<div class="w3-container w3-padding-64" style="padding:12px 16px;background-color: #4CAF50" id="gallery">
  <h3 class="w3-center" style="text-shadow: 2px 2px 5px blue;font-family: Arial" >OUR GALLERY</h3>
  <p style="border-bottom:1px dashed #ffff;font-family:  Courier New;color: #fff" class="w3-center w3-large">Touch This Photo For Details</p>
<hr>
  <div class="w3-row-padding" style="margin-top:64px;">
    <div class="w3-col l3 m6">
      <img src="img/teaching_center.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-border" alt="students care font side">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/banar1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-border" alt="font side with banar ">
    </div>
     <div class="w3-col l3 m6">
      <img src="img/outside.jpg" style="width:100%" onclick="onClick(this)" class="w3-border w3-hover-opacity" alt="outside of students care teaching center">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/s2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-border" alt="classroom">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="img/students.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-border" alt="model test exm-2020">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/prospectus12.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-border" alt="our prospectus">
    </div>
     <div class="w3-col l3 m6">
      <img src="img/mydulsir.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-border" alt="Our Cashier mydul sir at the classroom">
    </div>
    <div class="w3-col l3 m6">
      <img src="img/tt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-border" alt="teacher quotes ">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<!-- Media -->
<div style="background-color: " class="w3-container w3-padding-32">
  <div style="border-bottom: 3px solid #000120;color: #21388e;font-family: Gadget" class="w3-center"><span class="w3-xlarge">Our Media</span>
    </div>
  <div class="w3-row">
    <div class="w3-col m5">
    
      <h3 style="text-align: center;font-family: Lucida Grande"><b>Students Care Overview</b></h3>
       <video width="100%" height="400" controls>
      
      <source src="vedios/students_care.mp4" type="video/mp4">
      
    </video>
      
    </div>
    <div style="float: right;margin-top: 0px" class="w3-col m6 ">
      <h3 style="text-align: center;font-weight: bold;font-family: Charcoal">Important Lecture</h3>
     <iframe width="100%" height="400" src="https://www.youtube.com/embed/3jtrBHJ__iw?list=PLuaHF6yUT-72ajqbxICbOwi3E8K9XRRl6" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
</div>




<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center  w3-xlarge w3-border-teal w3-bottombar">CONTACT US</h3>
  <p class="w3-center w3-large">Lets get in touch & Send us a message:</p>
  <div style="margin-top:48px">

    <div class="w3-row">
    <div style="padding-right: 15px" class="w3-col m5">
      <h3 style="font-weight: bold;font-size: 28px;color: #333;text-align: center;border-bottom: 1px solid #fff;font-family: cursive">Address</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i><b> <span style="color: #ab9a9a;font-family: Gadget, sans-serif;font-size: 15px"> Mayer Dowa Plaza 2nd Floor, Tambulpur Bazar,Pirgachha,Rangpur</span></b> </p><hr>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i> <b><span style="color: #ab9a9a;font-family: Gadget, sans-serif;font-size: 18px"> +880 1309 423766 , +880 1767 019843</span></b> </p><hr>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> <span style="color: #ab9a9a;font-size: 18px;font-weight: bold;font-family: Gadget, sans-serif;font-size: 18px">mydulislam496@gmail.com</span></p><hr>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="https://formspree.io/mhrimonkhan@gmail.com" method="POST">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="name" required="">
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="_replyto">
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="subject">
      </div>  
      <input class="w3-check" type="checkbox" >
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
    <!-- Image of location/map -->
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1676.7385890859616!2d89.48945599821087!3d25.642902307571212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd2d0716b3b30b%3A0xe58b39c4f5ba3e98!2sstudents%20care%20teaching%20center!5e1!3m2!1sen!2sbd!4v1572095831287!5m2!1sen!2sbd" width="100%" height="500" frameborder="0" style="border:2px solid #032000;margin-top: 48px" allowfullscreen=""></iframe>
    
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="https://www.facebook.com/Students-care-teaching-centre-106703107408387/" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  
  
  <p>Powered by Students Care Teaching Center</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#index"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
  <div  class="w3-container w3-white">
    <div  class="w3-col m8  w3-left w3-animate-left">
      <p style="font-size: 16px;color: #000;font-family: Trebuchet MS;text-align: center;"><b> 
      Copyright 2019 © Students Care All Rights Reserved. </b></p>
    </div>
    
    <div class=" w3-right w3-col m4 w3-animate-right">
     <p style="color: #24796dfc;font-family: Courier New"><b>design & developed by <a href="https://rimon-khan.000webhostapp.com" >rimonIT</b></a></p> 
    </div>

  </div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script>
 jQuery(document).ready(function(){
   $('.counter').counterUp({
    delay: 10,
    time: 1000
});
}); 
</script>


<script>

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}


// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}
</script>
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</body>
</html>