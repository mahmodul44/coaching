<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Payment.php'; ?>
<?php require_once '../helpers/Format.php';?>

<?php 
$pd = new Payment();
$fm = new Format();
?>
<?php
if (isset($_GET['delpay'])) {
	$id=$_GET['delpay'];
	$delpay = $pd->delpayById($id);
}

?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Student Payment List</h2>
        <div class="block"> 
        <?php
                if (isset($delpay)) {
                   echo $delpay;
               }
                ?>  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>SL</th>
					<th>Student Name</th>
					<th>Amount</th>
					<th>Payment Date</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				$getPd =$pd->getAllPayment();
				if ($getPd) {
					$i=0;
					while ($result=$getPd->fetch_assoc()) {
						$i++;
				
				?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['sname']; ?></td>
					<td><?php echo $result['tk']; ?></td>
					<td><?php echo $result['trik']; ?></td>
					<td>
		<a href="spaymentedit.php?payid=<?php echo $result['sid'];?>"> Edit</a> || 
				<a onclick= "return confirm('Are you sure to delte !')" href="?delpay=<?php echo $result['sid'];?>">Delete</a></td>
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
