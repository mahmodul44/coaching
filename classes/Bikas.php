<?php
$filepath=realpath(dirname(__FILE__));
include_once  ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
?>
<?php
/**
 * 
 */
class Bikas {
  private $db;
  private $fm;
  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }

         
	public function onlinePay($data){
		$payment_method = mysqli_real_escape_string($this->db->link, $data['payment_method']);
    $st_name = mysqli_real_escape_string($this->db->link, $data['st_name']);
		$mobile = mysqli_real_escape_string($this->db->link, $data['mobile']);
		$trxID = mysqli_real_escape_string($this->db->link, $data['trxID']);
		
                  
	  
	    if ($payment_method == "" || $st_name == "" || $mobile == "" || $trxID == "") {
     	$msg = "<span class='error'> Please Fill Up All Field !! </span>";
     		return $msg;
     	}else{
      	 $query = "INSERT INTO tbl_payment(payment_method,st_name, mobile, trxID) VALUES('$payment_method','$st_name','$mobile','$trxID')";
           $inserted_row = $this->db->insert($query);
           
           if ($inserted_row) {
            $msg ="<span class='success'>Payment Data Inserted Successfully.</span>";
           
              header("Location:sucess.php");
               return $msg;
            }else {
               $msg = "<span class='error'>Payment data Not Inserted !</span>";
               return $msg;}
               }

   }  
   
   
   
   
   public function getAllPayment(){
      $query = " SELECT * from tbl_payment ORDER BY tbl_payment.id DESC ";
		$result = $this->db->select($query);
		return $result;
      
   }
   
   
}
