<!DOCTYPE html>
<html>
<head>
	<title>Students Care</title>
  <link rel="icon" href="img/title_icon.jpg" type="img" />
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i>  Home</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#" class="w3-bar-item w3-button w3-wide" style="color: #d278;text-align: center;font-family: Helvetica;text-shadow: 2px 2px 5px ;cursor: none;"><b>Helpline: </b><span style="font-size: 16px;font-family: Times New Roman red Serifs;" >  <b> 01309 423766</b> </span></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
 <a href="#index.php" class="w3-bar-item w3-button">Home</a>
 
</nav>

<!-- About Section -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
  <img src="img/title_icon.jpg" class="w3-round w3-margin-bottom w3-margin-top w3-animate-bottom" alt="Students Care Logo" style="width:40%">
    <h2 class="w3-wide w3-animate-zoom">Your Payment is Sucessful.Now We Will Contact You 24 Hours.Also follow our website notice board for any information. Thank You</h2>
   
  
</div>

<div  class="w3-container w3-light-grey">
    <div  class="w3-col m7  w3-left w3-animate-left">
      <p style="font-size: 16px;color: #ab9a9a;font-family: Trebuchet MS;text-align: center;"><b> 
      Copyright 2019 © Students Care All Rights Reserved. </b></p>
    </div>
    
    <div class=" w3-right w3-col m5 w3-animate-right">
     <p style="color: #abc443;font-family: Courier New"><b>Design & Developed By <a href="https://rimon-khan.000webhostapp.com" > rimonIT</b><p> 
    </div>

  </div>


<script>
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

</script>

</body>
</html>