<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Notice.php'; ?>
<?php
 $nb = new Notice();
if (isset($_GET['delnb'])) {
	$id = $_GET['delnb'];
	$delNB = $nb->delNbById($id);
}

?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Notice Board</h2>
                <div class="block"> 
                <?php
                if (isset($delNB)) {
                   echo $delNB;
               }
                ?>       
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Notice Board</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$getNB = $nb->getAllNotice();
						if ($getNB) {
							$i=0;
							while ($result = $getNB->fetch_assoc()) {
								$i++;

						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['nboard'] ;?></td>
				<td><a href="noticeedit.php?nbid=<?php echo $result['nid'];?>" >Edit</a> || <a onclick="return confirm('Are you sure to delte !')" href="?delnb=<?php echo $result['nid'];?>">Delete</a></td>
						</tr>
						<?php } } ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

