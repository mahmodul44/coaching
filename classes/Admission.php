<?php
$filepath = realpath(dirname(__FILE__));
include_once  ($filepath.'/../lib/Database.php');
include_once  ($filepath.'/../helpers/Format.php');
?>
<?php

class Admission {
    private $db;
    private $fm;
    
    public function __construct(){
        $this->db = new Database();
        session_start();
        $this->fm = new Format();
    }
    
    

public function studentInsert($data,$file){
    
$Name =mysqli_real_escape_string($this->db->link, $data['Name']);
$fName = mysqli_real_escape_string($this->db->link, $data['fName']);
$mName =mysqli_real_escape_string($this->db->link, $data['mName']);
$sName =mysqli_real_escape_string($this->db->link, $data['sName']);
$Section =mysqli_real_escape_string($this->db->link, $data['Section']);
$Payment =mysqli_real_escape_string($this->db->link, $data['Payment']);

$Phone =mysqli_real_escape_string($this->db->link, $data['Phone']);
$uName =mysqli_real_escape_string($this->db->link, $data['uName']);
$Thana =mysqli_real_escape_string($this->db->link, $data['Thana']);
$Distric =mysqli_real_escape_string($this->db->link, $data['Distric']);
$Village =mysqli_real_escape_string($this->db->link, $data['Village']);
$Gender =mysqli_real_escape_string($this->db->link, $data['Gender']);
$birthDate=mysqli_real_escape_string($this->db->link, $data['birthDate']);
$admissionDate=date("Y/m/d");

        
    $permited  = array('jpg', 'jpeg', 'png', 'gif');
    $file_name = $file['photo']['name'];
    $file_size = $file['photo']['size'];
    $file_temp = $file['photo']['tmp_name'];

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
    $uploaded_image = "uploads/".$unique_image;
    
   
    if ($Name == "" || $fName == "" || $mName == "" || $sName =="" || $Section == "" || $Payment == ""||  $Phone == ""|| $uName == ""|| $Thana == "" || $Distric == "" || $Village == "" || $Gender == ""||  $birthDate == ""|| $admissionDate == "") {
        $meg = "<span class='error'> Must Be Fill Up All Field !! Empty Field Not Accept.</span>";
            return $meg;
        }
        elseif ($file_size >1048567) {
     echo "<span class='error'>Image Size should be less then 1MB!
     </span>";
    }
    elseif (in_array($file_ext, $permited) === false) {
    echo "<span class='error'>You can upload only : -".implode(', ', $permited)." !!   <b> Something Wrong! Please Try Again..</b></span>";
    } 
        else{
     move_uploaded_file($file_temp, $uploaded_image);
    $query = "INSERT INTO tbl_admission(Name ,fName, mName,sName,Section,Payment, Phone,uName,Thana,Distric,Village,Gender,birthDate,admissionDate,photo) VALUES ('$Name','$fName','$mName','$sName','$Section','$Payment','$Phone','$uName','$Thana','$Distric','$Village','$Gender','$birthDate','$admissionDate','$uploaded_image')";
    $inserted_row = $this->db->insert($query);

    if ($inserted_row) {
        $id = $this->db->link->insert_id;
      
$_SESSION["my_id"] = $id;

        header("Location:downloadform.php");
     $meg ="<span class='success'>Online Admission Successfully.
     </span>";
     return $meg;
    }else {
     $meg = "<span class='error'>Admission not Successfull !</span>";
     
    return $meg;
    }
        }
     }
 public function getAllStudent(){
      $query = " SELECT * from tbl_admission ORDER BY tbl_admission.id DESC ";
        $result = $this->db->select($query);
        return $result;
      
   }
      
      public function getStudent(){

        $query = " SELECT * from tbl_admission Where tbl_admission.id=$_SESSION[my_id]";
        $result = $this->db->select($query);
        return $result;
      }
   
}
