<?php
$filepath = realpath(dirname(__FILE__));
include_once  ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
?>
<?php
/**
 * 
 */
class Notice{
	private $db;
	private $fm;
	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function noticeInsert($nboard){
		$nboard = $this->fm->validation($nboard);
		$nboard = mysqli_real_escape_string($this->db->link,$nboard);
			if (empty($nboard)) {
     	$meg = "<span class='error'>Field Must Not Empty</span>";
     		return $meg;
     	}else{
     		$query = "INSERT INTO tbl_notice (nboard) VALUES ('$nboard')";
             $inserted_row = $this->db->insert($query);

             if ($inserted_row) {
           $meg="<span class='success'>Notice Add sucessfully</span>";
             	return $meg;
             }else{
             $meg="<span class='error'>Not Add Please Try Again </span>";
             	return $meg;
             }
	}
}

    public function getAllNotice(){
		$query = " SELECT * FROM tbl_notice ORDER BY nid DESC ";
		$result = $this->db->select($query);
		return $result;
	}
	public function getNbById($id){
		$query = " SELECT * FROM tbl_notice WHERE nid = '$id' ";
		$result = $this->db->select($query);
		return $result;
	}

   public function nbUpdate($nboard,$id){
     $nboard = $this->fm->validation($nboard);
    $nboard = mysqli_real_escape_string($this->db->link,$nboard);
    $id = mysqli_real_escape_string($this->db->link,$id);
    if (empty($nboard)) {
     $meg = "<span class = 'error'> Category Field Must Not Empty</span>";
     		return $meg;
     	}else{
     		$query = "UPDATE tbl_notice 
     		 SET 
     		nboard= '$nboard'  
     		WHERE nid ='$id'";
     		$updated_row = $this->db->update($query);
     		if ($updated_row) {
     	       $meg="<span class='success'>Notice update sucessfully</span>";
             	return $meg;	
     		}else{
     		 	$meg="<span class='error'>Not update sucessfully </span>";
             	return $meg;
     		 } 
     	}
	}


	public function delNbById($id){
		$query = " DELETE  FROM tbl_notice WHERE nid = '$id' ";
		$deldata = $this->db->delete($query);
		if ($deldata) {
     	       $meg="<span class='success'> Delete sucessfully</span>";
             	return $meg;	
     		}else{
     		 	$meg="<span class='error'> delete Not sucessfully </span>";
             	return $meg;
     		 }
	}
}
?>