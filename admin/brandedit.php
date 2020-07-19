<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Brand.php'; ?>


<?php

if (!isset($_GET['brandid']) || $_GET['brandid'] == NULL) {
  echo " <script> window.location = 'brandlist.php'; </script> ";

}else{
  $id  = $_GET['brandid'];
}
   $brand = new Brand();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Tname = $_POST['Tname'];
    $Amount = $_POST['Amount'];
    $trik = $_POST['trik'];
    $updateBrand = $brand->brandUpdate($Tname,$Amount,$trik,$id);
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Salary Info</h2>
               <div class="block copyblock">
               <?php
               if (isset($updateBrand)) {
                   echo $updateBrand;
               }
               ?> 
              <?php 
              $getBrand = $brand->getBrandById($id);
              if ($getBrand) {
                while ($result = $getBrand->fetch_assoc()) {
                  
                  ?>
                  <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="Tname" value="<?php echo $result['Tname']; ?>"  placeholder="Enter Teacher Name..." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="Amount" value="<?php echo $result['Amount']; ?>"  placeholder="Enter Amount..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="trik" value="<?php echo $result['trik']; ?>"  placeholder="Enter PAyment Date..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                  <?php } } ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>