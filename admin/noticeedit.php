<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Notice.php'; ?>


<?php

if (!isset($_GET['nbid']) || $_GET['nbid'] == NULL) {
  echo " <script> window.location = 'noticelist.php'; </script> ";

}else{
  $id  = $_GET['nbid'];
}
   $nb = new Notice();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nboard = $_POST['nboard'];
    $updateNB = $nb->nbUpdate($nboard,$id);
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Notice Board</h2>
               <div class="block copyblock">
               <?php
               if (isset($updateNB)) {
                   echo $updateNB;
               }
               ?> 
              <?php 
              $getNB = $nb->getNbById($id);
              if ($getNB) {
                while ($result = $getNB->fetch_assoc()) {
                  
                  ?>
                  <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="nboard" value="<?php echo $result['nboard']; ?>" class="medium" />
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