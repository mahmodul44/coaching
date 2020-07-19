<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block"> 
            <table  class="data display datatable" id="example">
			<thead>
				<tr>
					<th>SL</th>
					<th>Student Name</th>
					<th>Payment Method</th>
					<th>Mobile</th>
                     <th>TrxID</th>
                     
				</tr>
			</thead>
			
			<tbody>

				<?php
				include '../classes/Bikas.php'; 
                $pm = new Bikas();
				$getPd =$pm->getAllPayment();
				if ($getPd) {
					$i=0;
					while ($result=$getPd->fetch_assoc()) {
						$i++;
				
				?>
				<tr class="odd gradeX">

					<td><?php echo $i; ?></td>
					<td><?php echo $result['st_name']; ?></td>
                    <td><?php echo $result['payment_method']; ?></td>                         
                    <td><?php echo $result['mobile']; ?></td>                         
					<td><?php echo $result['trxID']; ?></td>
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