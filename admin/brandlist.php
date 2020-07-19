<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Brand.php'; ?>
<?php
 $brand = new Brand();
if (isset($_GET['delbrand'])) {
	$id=$_GET['delbrand'];
	$delBrand = $brand->delBrandById($id);
}

?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Salary List</h2>
                <div class="block"> 
                <?php
                if (isset($delBrand)) {
                   echo $delBrand;
               }
                ?>       
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Teacher Name</th>
							<th>Amount</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$getBrand = $brand->getAllBrand();
						if ($getBrand) {
							$i=0;
							while ($result = $getBrand->fetch_assoc()) {
								$i++;

						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['Tname'] ;?></td>
							<td><?php echo $result['Amount'] ;?></td>
							<td><?php echo $result['trik'] ;?></td>
				<td><a href="brandedit.php?brandid=<?php echo $result['Id'];?>" >Edit</a> || <a onclick="return confirm('Are you sure to delte this row !')" href="?delbrand=<?php echo $result['Id'];?>">Delete</a></td>
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

