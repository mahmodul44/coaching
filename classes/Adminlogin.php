<?php include '../lib/Session.php';
Session::checkLogin();
include_once '../lib/Database.php';
include_once '../helpers/Format.php';

 ?>

<?php
/**
 * Adminlogin class
 */
class Adminlogin{
     private $db;
     private $fm;
     
    public function __construct(){

     $this->db = new Database();
     $this->fm = new Format();
     }
     public function adminlogin($adminUser,$adminPass){
          $adminUser = $this->fm->validation($adminUser);
          $adminPass = $this->fm->validation($adminPass);

          $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
          $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

          if (empty($adminUser) || empty($adminPass)) {
               $loginmeg = "username or password must not empty!";
               return $loginmeg; 
          }else{
               $query = " SELECT * FROM tbl_admin WHERE adminUser= '$adminUser' AND adminPass= '$adminPass' ";
               $result = $this->db->select($query);
               if ($result != false) {
                     $value = $result->fetch_assoc();
                     Session::set("adminlogin",true);
                     Session::set("adminId", $value['adminId']);
                     Session::set("adminUser", $value['adminUser']);
                     Session::set("adminName", $value['adminName']);
                     header("Location:dashbord.php");

                }else{
                    $loginmeg = "username or password Not Match !";
                    return $loginmeg;
                } 
          }
     }
}

 ?>