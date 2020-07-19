<?php
$filepath = realpath(dirname(__FILE__));
include_once  ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
?>

<?php
/**
 * 
 */
class Payment{
	private $db;
	private $fm;

	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
 public function paymentInsert($sname,$tk,$trik){
        $sname = $this->fm->validation($sname);
        $tk = $this->fm->validation($tk);
        $trik = $this->fm->validation($trik);
$sname =mysqli_real_escape_string($this->db->link,$sname);
$tk = mysqli_real_escape_string($this->db->link, $tk);
$trik =mysqli_real_escape_string($this->db->link,$trik);

 if ($sname == "" || $tk == "" || $trik == "") {
     	$meg = "<span class='error'> Field Must Not Empty</span>";
     		return $meg;
     	}else{
     		$query = "INSERT INTO tbl_students (sname ,tk, trik) VALUES('$sname','$tk','$trik')";
            $inserted_row = $this->db->insert($query);

      if ($inserted_row) {
         $meg ="<span class='success'>payment Inserted Successfully.
        </span>";
        return $meg;
       }else {
        $meg = "<span class='error'>Payment Not Inserted !</span>";
         return $meg;
    }
     	}

 }

public function getAllPayment(){
	$query = " SELECT * FROM tbl_students ORDER BY sid DESC ";
		$result = $this->db->select($query);
		return $result;
}
public function getpayById($id){
	$query = " SELECT * FROM tbl_students WHERE sid = '$id' ";
		$result = $this->db->select($query);
		return $result;
}


public function paymentUpdate($sname,$tk,$trik,$id){
    $sname = $this->fm->validation($sname);
    $tk = $this->fm->validation($tk);
    $trik = $this->fm->validation($trik);

$sname = mysqli_real_escape_string($this->db->link,$sname);
$tk = mysqli_real_escape_string($this->db->link, $tk);
$trik = mysqli_real_escape_string($this->db->link, $trik);
$id = mysqli_real_escape_string($this->db->link, $id);

if ($sname == "" || $tk == "" || $trik == "") {
     	$meg = "<span class='error'> Field Must Not Empty</span>";
     		return $meg;
}else{
     $query =" UPDATE tbl_students 
    	SET 
    	sname = '$sname',
    	tk = '$tk',
    	trik = '$trik'	
    	WHERE sid = '$id' ";

    $updated_row = $this->db->update($query);

    if ($updated_row) {
     $meg ="<span class='success'>Data Updated Successfully.
     </span>";
     return $meg;
    }else {
     $meg = "<span class='error'>Data Not updated !</span>";
    return $meg;
    }
     	} 
}

public function delpayById($id){
   $query = " DELETE  FROM tbl_students WHERE sid = '$id' ";
		$deldata = $this->db->delete($query);
		if ($deldata) {
     	       $meg="<span class='success'>row is Delete sucessfully</span>";
             	return $meg;	
     		}else{
     		 	$meg="<span class='error'> delete Not sucessfully </span>";
             	return $meg;
     		 }
}
}

?>