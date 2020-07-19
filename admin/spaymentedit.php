<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Payment.php'; ?>


<?php 
if (!isset($_GET['payid']) || $_GET['payid'] == NULL) {
  echo " <script> window.location = 'spaymentlist.php'; </script> ";

}else{
  $id  = $_GET['payid'];
}

$pd = new Payment();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
   $sname = $_POST['sname'];
   $tk    = $_POST['tk'];
   $trik  = $_POST['trik'];
    $updatePayment = $pd->paymentUpdate($sname,$tk,$trik,$id);
}
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Student Payment Info</h2>
        <div class="block"> 
        <?php 
        if (isset($updatePayment)) {
            echo $updatePayment;
        }
        ?>  
        <?php 
        $getPay = $pd->getpayById($id);
          if($getPay) {
            while($value = $getPay->fetch_assoc() ) {
                     
        ?>            
         <form action="" method="post">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Student Name</label>
                    </td>
                    <td>
                        <input type="text" name="sname" value="<?php echo $value['sname'];?>" class="medium" />
                    </td>
                </tr>
        <tr>
                    <td>
                        <label>Amount</label>
                    </td>
                   <td>
                <input type="text" name="tk" value="<?php echo $value['tk'];?>" class="medium" />
                    </td>
                
                </tr>
        
    
        <tr>
                    <td>
                        <label>Update Date</label>
                    </td>
                    <td>
            <input type="date" name="trik"  value="<?php echo $value['trik'];?>" class="medium" />
                    </td>
                </tr>
            

                  <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            <?php } } ?>
        </div>
    </div>
</div>

<?php include 'inc/footer.php';?>   