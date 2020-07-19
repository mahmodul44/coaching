<?php
$filepath = realpath(dirname(__FILE__));
include_once  ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
?>
<?php

class Brand {
	private $db;
	private $fm;
	
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
}
  public function brandInsert($Tname,$Amount,$trik){
		$Tname = $this->fm->validation($Tname);
        $Amount = $this->fm->validation($Amount);
        $trik = $this->fm->validation($trik);
     	$Tname = mysqli_real_escape_string($this->db->link,$Tname);
        $Amount = mysqli_real_escape_string($this->db->link,$Amount);
        $trik = mysqli_real_escape_string($this->db->link,$trik);

     	if($Tname == "" || $Amount == "" || $trik == "") {
     	$meg = "<span class='error'> Not insert Please Fill Up all row & Try Again</span>";
     		return $meg;
     	}else{
     		$query= "INSERT INTO tbl_salary (Tname,Amount,trik) VALUES ('$Tname','$Amount','$trik')";
             $brandinsert = $this->db->insert($query);
             if ($brandinsert) {
           $meg="<span class='success'>Teacher Salary sucessfully insert </span>";
             	return $meg;
             }else{
             $meg="<span class='error'>Not insert Please Fill Up all row & Try Again</span>";
             	return $meg;
             }
     	}
	}



public function getAllBrand(){
		$query = " SELECT * FROM tbl_salary ORDER BY Id DESC ";
		$result = $this->db->select($query);
		return $result;
	}
	public function getBrandById($id){
		$query = " SELECT * FROM tbl_salary WHERE Id = '$id' ";
		$result = $this->db->select($query);
		return $result;
	}
public function brandUpdate($Tname,$Amount,$trik,$id){
     $Tname = $this->fm->validation($Tname);
      $Amount = $this->fm->validation($Amount);
       $trik = $this->fm->validation($trik);
    $Tname = mysqli_real_escape_string($this->db->link,$Tname);
    $Amount = mysqli_real_escape_string($this->db->link,$Amount);
    $trik = mysqli_real_escape_string($this->db->link,$trik);
    $id = mysqli_real_escape_string($this->db->link,$id);
    if ($Tname == "" || $Amount == "" || $trik == "") {
     $meg = "<span class = 'error'> Not insert Please Fill Up all row & Try Again</span>";
     		return $meg;
     	}else{
     		$query = "UPDATE tbl_salary 
     		 SET 
     		Tname = '$Tname', 
            Amount = '$Amount', 
            trik = '$trik'
     		WHERE Id ='$id'";
     		$updated_row = $this->db->update($query);
     		if ($updated_row) {
     	       $meg="<span class='success'>salary  update sucessfully</span>";
             	return $meg;	
     		}else{
     		 	$meg="<span class='error'>salay Not update sucessfully </span>";
             	return $meg;
     		 } 
     	}
	}
	public function delBrandById($id){
		$query = " DELETE  FROM tbl_salary WHERE Id = '$id' ";
		$deldata = $this->db->delete($query);
		if ($deldata) {
     	       $meg="<span class='success'>salary row is Delete sucessfully</span>";
             	return $meg;	
     		}else{
     		 	$meg="<span class='error'> delete Not sucessfully </span>";
             	return $meg;
     		 }
	}
}
?>


