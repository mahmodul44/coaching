<!DOCTYPE html>
<html>
<head>
  <title>Admission Form</title>
  <link rel="icon" href="img/logo.png" type="img" />
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<script>
  //form validation using capital letter
function myFunction() {
  var x = document.getElementById("cletter");
  x.value = x.value.toUpperCase();
}
</script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif;padding: 0px}


/* Full height image header */

.w3-bar .w3-button {
  padding: 18px;
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
    <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i>  HOME</a>
    <a href="payment.php" class="w3-bar-item w3-button"><b> PAYMENT</b></a>
    
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      
    <a href="#" class="w3-bar-item w3-button w3-wide" style="color: #d278;cursor: none; text-align: center;font-family: Helvetica;text-shadow: 2px 2px 5px ;"><b>Helpline: </b><span style="font-size:16px;font-family: Times New Roman red Serifs;" >  <b> 01309 423766</b> </span></a>
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
<h5 style="color: #111111;font-family: Baloo Bhai">Tambulpur Bazer,Pirgachha,Rangpur</h5>
</div>
<div class="row">
  <div class="col-75">
    <div style="background-color: #ffffff;border: none;" class="container">
      <?php
 include 'classes/Admission.php'; 
 
$pd = new Admission();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
  
   $insertStudent =$pd->studentInsert($_POST, $_FILES);
      
}

?>
     <form action="" method="post" enctype="multipart/form-data">
      <span style="text-align: center;color:red;font-weight: bold;margin-bottom: 30px; font-size:22px">
    <?php 
 if (isset($insertStudent)) {
          echo "$insertStudent";
        }  
   ?>
  </span>
        <div style="padding-left: 15px;" class="row">
            <div  class="col-50">
            <label for="fname"><i class="fa fa-user"></i> <b>Student Full Name</b> </label>
            <input type="text" name="Name" placeholder="student name" id="cletter" onchange="myFunction()">
            <label for="email"><i class="fa fa-user"></i>  <b>Father Name</b></label>
            <input type="text" name="fName" placeholder="Father name">
            <label for="fname"><i class="fa fa-user"></i>  <b>Mother Name</b></label>
            <input type="text" name="mName" placeholder="Mother Name ">
            <label for="email"><i class="fa fa-institution"></i>  <b>School Name</b></label>
            <input type="text" name="sName" placeholder="school name">
             <div class="row">
              <div style="padding-left: 15px;" class="col-50">
                <label for="Section"><b>Class</b></label>
                <select class="options" name="Section">
      <option>Select Your Class</option>
      <option value="One">One</option>
      <option value="Two">Two</option>
      <option value="Three">Three</option>
      <option value="Four">Four</option>
      <option value="Five">Five</option>
      <option value="PSC">PSC Preapration </option>
      <option value="Six">Six</option>
      <option value="Seven">Seven</option>
      <option value="Eight">Eight</option>
      <option value="JSC">JSC Preapration</option>
      <option value="Nine">Nine</option>
      <option value="Ten">Ten</option>
      <option value="SSC_Science">SSC Preapration(Science)</option>
      <option value="SSC_Arts">SSC Preapration(Arts)</option>
      <option value="SSC_Commerce">SSC Preapration(Commerce)</option>
    </select>
        </div>
              <div style="padding-left: 15px;" class="col-50">
                <label for="Distric"><b>Distric</b></label>
                <select class="options" name="Distric">
    <option value="0">Select your Distric</option>
    <option value="Rangpur">Rangpur</option>
    <option value="Gaibanda">Gaibandha</option>
    <option value="Kurigram">Kurigram</option>
    <option value="Lalmonirhat">Lalmonirhat</option>
    <option value="Panchagarh">Panchagarh</option>
    <option value="Dinajpur">Dinajpur</option>
    <option value="Thakurgaon">Thakurgaon</option>
    </select>
              </div>
             
              </div>
              <div class="row">
              <div class="col-50">
                <label for="Thana"><b>Thana Name</b></label>
            <input type="text" id="city" name="Thana" placeholder="Enter your thana">
              </div>
             <div class="col-50">
                <label for="Union"></i><b>Union Name</b></label>
            <input type="text" id="city" name="uName" placeholder="Enter your union">
        </div>
              </div>
            <label for="adr"><i class="fa fa-address-card-o"></i> <b> Village Name</b></label>
            <input type="text" id="adr" name="Village" placeholder="Enter your Village">
            </div>

          <div class="col-50">
            <h4>Accepted Cards</h4>
            <div class="icon-container">
              <img width="12%" src="img/bkash_logo.png" alt="bkash_logo">
              <img width="10%" src="img/rocket_logo.png" alt="rocket_logo">
              
            </div>
            
                
              
             <div class="row">
              <div style="padding-left: 15px;" class="col-50">
                <label for="state"><b>Payment Method</b></label>
                <select class="options" name="Payment">
                  <option>Select Payment Method</option>
      <option>Bkash</option>
    </select>
              </div>
              
              </div>
        
            <label for="cname"><b>Mobile Number</b></label>
            <input type="text" id="cname" name="Phone" placeholder="student mobile number">
            
            
            <div class="row">
              <div class="col-50">
              <label for="Gender"><b>Select Your Gender</b></label><br>
  <input type="radio" value="Male" checked="checked" name="Gender">
  <span class="checkmark">Male</span><br>
  <input type="radio" value="Female" name="Gender">
  <span class="checkmark">Female</span>
              </div>
              <div class="col-50">
                <label><b>Date of Birth</b></label>
           <input type="date" name="birthDate" >
              </div>
              
            </div>
            <br>
            <label style="color: red">Image must be 400×500 pixels<span style="font-weight: bold;font-size: 20px;color: black">*</span></label>
            <input style="margin-bottom: 15px" type="file" name="photo" class="form-control-file border">

          </div>
          
        </div>
        <label>
          <input type="checkbox" name="sameadr"><b> Remember Me</b>
        </label>
        <input type="submit" name="submit"  value="Submit" style="width: 30%;float: right;" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container w3-black">
     
      <h2>নির্দেশিকা </h2>      
    </div>
    <span class="price"><img width="100%" src="img/fee_info2.png"> </span>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center w3-black">
  <h2>Thanks</h2>
  
  <p>© 2019 All Rights Reserved By Students Care Teaching center</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="admissionform.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>


</body>
</html>