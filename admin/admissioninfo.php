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
                    <th>Photo</th>
					<th>Name</th>
					<th>Father Name</th>
					<th>School</th>
					<th>Section</th>
					<th>Mobile</th>
                     <th>Village</th>
                     
				</tr>
			</thead>
			
			<tbody>

				<?php
                  include '../classes/Admission.php'; 
                  $pm = new Admission();
				$getPd =$pm->getAllStudent();
				if ($getPd) {
					$i=0;
					while ($result=$getPd->fetch_assoc()) {
						$i++;
				?>
				<tr class="odd gradeX">

					<td><?php echo $i; ?></td>
                    <td><img src="../<?php echo ($result['photo']); ?>" width="60px" height="40px" ></td>
                    <td><?php echo $result['Name']; ?></td>                         
                    <td><?php echo $result['fName']; ?></td>                         
					<td><?php echo $result['sName']; ?></td>
					<td><?php echo $result['Section']; ?></td>
					<td><?php echo $result['Phone']; ?></td>
					<td><?php echo $result['Village']; ?></td>
					
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