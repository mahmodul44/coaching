<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Brand.php'; ?>
<?php

   $brand = new Brand();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Tname = $_POST['Tname'];
    $Amount = $_POST['Amount'];
    $trik = $_POST['trik'];
    $insertBrand = $brand->brandInsert($Tname,$Amount,$trik);
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add Teacher Salary</h2>
               <div class="block copyblock">
               <?php
               if (isset($insertBrand)) {
                   echo $insertBrand;
               }
               ?> 
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="Tname"  placeholder="Enter Teacher Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="Amount"  placeholder="Enter Amount..." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                            
                                <input type="Date" name="trik"  placeholder="Enter Date..." class="medium" />
                            </td>
                        </tr>
						         <tr> 
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