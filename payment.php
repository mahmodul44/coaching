<!DOCTYPE html>
<html>
<head>
   <title>Students Care Teaching center</title>
  <link rel="icon" href="img/title_icon.jpg" type="img" />
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body, html {
  padding: 0px;
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */

.w3-bar .w3-button {
  padding: 10px;
}
@media (max-width: 1000px) {
  .row {
    flex-direction: column;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

  <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>
    <a href="admissionform.php" class="w3-bar-item w3-button"><b>ADMISSION FORM</b></a>
    <!-- Right-sided navbar links -->
   <div class="w3-right w3-hide-small">
      <a href="#" class="w3-bar-item w3-button w3-wide" style="color: #d278;text-align: center;font-family: Helvetica;text-shadow: 2px 2px 5px ;cursor: none;"><b>Helpline: </b><span style="font-size: 16px;font-family: Times New Roman red Serifs;" >  <b> 01309 423766</b> </span></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium">
      <i class="fa fa-user"></i>
    </a>
  </div>
</div>
<div style="margin-top: 60px;text-align: center;">
  <img style="width: 10%;margin-top: 5px" class="w3-animate-zoom" src="img/logo.png">
<h3 style="color: purple;font-family: Courier New;line-height: .3">Students Care Teaching Center</h3>
<h5 style="color: #111;font-family: Courier New">Tambulpur Pirgachha Rangpur</h5>
</div>
<div class="row">
  <div  class="col-75">
    <div style="background-color: #ffff;border-style: none;" class="container">
      <h4 style="font-weight: bold;color: purple">আবেদন ফি পাঠানোর পদ্ধতি</h4>
      <div class="row">
      <div class="col-50">

<img style="" width="100%" src="img/fee_info.png">
</div>
<div class="col-50">
<img style="" width="100%" src="img/bkash1.png">
</div>
</div>

    </div>
   
  </div>

  <div class="col-25">
    <div class="container">
      <span style="text-align:center;color:red;font-weight:bold;margin:18px;font-size:18px">
      <?php
    include 'classes/Bikas.php'; 
    $pm = new Bikas();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
         $insertPayment = $pm->onlinePay($_POST);}
    
         
     if (isset($insertPayment)) {
          echo "$insertPayment";
        }     
   ?> 
</span>
      <form action="" method="post">
     
        <div class="row">
          <div class="col-25">
                <label for="state">Payment Method</label>
                <select class="options" name="payment_method">
                  <option>Select Payment Method</option>
      <option>Bikash</option>
    </select>
    <label for="sname">Name</label>
            <input type="text" id="cname" name="st_name" placeholder="Student name">
    <label for="cname">Ref Number</label>
            <input type="text" id="cname" name="mobile" placeholder="Ref Number">
            
            <label for="cname">TranxID</label>
            <input type="text" id="cname" name="trxID" placeholder="Bkash TranxID">
            
          
          </div>
          
        </div>
        <input type="submit" name="submit"  value="Submit" class="btn">
      </form>
    </div>
  </div>
  
</div>


<!-- Footer -->
<div  class="w3-container w3-black">
    <div  class="w3-col m7  w3-left w3-animate-left">
      <p style="font-size: 16px;color: #f2f3f2;font-family: Trebuchet MS;text-align: center;"><b> 
      Copyright 2019 © Students Care All Rights Reserved. </b></p>
    </div>
    
    <div class=" w3-right w3-col m5 w3-animate-right">
     <p style="color: #abc443;font-family: Courier New"><b>design & developed By <a href="https://rimon-khan.000webhostapp.com" > rimonIT</b><p> 
    </div>

  </div>

</body>
</html>