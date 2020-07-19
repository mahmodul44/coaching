<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Notice.php'; ?>
<?php

   $nb = new Notice();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nboard = $_POST['nboard'];
    $insertNotice = $nb->noticeInsert($nboard);
}
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add Notice</h2>
               <div class="block">
               <?php
               if (isset($insertNotice)) {
                   echo $insertNotice;
               }
               ?> 
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Notice</label>
                    </td>
                    <td>
                        <!--
                        <textarea class="tinymce" name="nboard" ></textarea>
                    -->
                    <textarea name="nboard" class="tinymce"></textarea>
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
        <!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>