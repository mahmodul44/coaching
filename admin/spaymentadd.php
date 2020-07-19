<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Payment.php'; ?>


<?php 
$pd = new Payment();
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $sname = $_POST['sname'];
   $tk    = $_POST['tk'];
   $trik  = $_POST['trik'];
    $insertPayment = $pd->paymentInsert($sname,$tk,$trik);
}
?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Add Students Payment</h2>
        <div class="block"> 
        <?php 
        if (isset($insertPayment)) {
            echo $insertPayment;
        }
        ?>              
         <form action="spaymentadd.php" method="post">
            <table class="form">          
                <tr>
                    <td>
                        <label>Student Name</label>
                    </td>
                    <td>
                        <input type="text" name="sname" placeholder="Enter Student Name..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Amount</label>
                    </td>
                    <td>
                        <input type="text" name="tk" placeholder="Enter Amount..." class="medium" />
                    </td>
                
                </tr>
				<tr>
                    <td>
                        <label>Payment Date</label>
                    </td>
                    <td>
                       <input type="date" name="trik" placeholder="Select Payment Date.." class="medium" /> 
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

<?php include 'inc/footer.php';?>