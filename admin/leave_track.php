<?php 
	include ('menu.php');
?>
<link rel="shortcut icon" href="../hrlogo.png">
	<div class="container-fluid">
				<div class = "row" style = "margin-top:50px">	
					<div class = "col-md-5">
						<ul class="nav nav-tabs">
						  <li role="presentation"><a href="view-emp-pending.php">Pending</a></li>
						  <li role="presentation"><a href="approval_approve.php">Approve</a></li>
						  <li role="presentation"><a href="approval_deny.php">Deny</a></li>
						  <li role="presentation" class="active"><a href="leave_track.php">Trace Leave</a></li>
						  <li role="presentation"><a href="all_approve.php">All Approve</a></li>
						</ul>
					</div>
					<div class = "col-md-2">
						<h1>Sick Leave</h1>
					</div>
				</div>
<div class="container-fluid">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<?php
						//this codes is that all the approve will go to the approve submenu
						$sql = "SELECT * FROM employee, department, leaves, executive
									WHERE employee.emp_id = leaves.emp_id 
									AND employee.id_dept = department.id_dept 
									AND executive.exe_vp = leaves.exe_vp 
									AND employee.stat='1' AND executive.exe_vp = '1'";
						$qry=mysql_query($sql);
					?>
						<table class='table table-hover'>
									<thead>
										<tr>
											<th>Employee ID</th>
											<th>Department</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Filed Date</th>
											<th>Status</th>
										</tr>
									</thead>
					<?php
						while($rec=mysql_fetch_array($qry))
						{
					?>
					<tbody>
						<tr>
								<td>
									<?php echo $rec['id_emp']; ?>
								</td>
								<td>
									<?php echo $rec['depart_name']; ?>
								</td>
								<td>
									<?php echo $rec['emp_fname']; ?>
								</td>
								<td>
									<?php echo $rec['emp_lname']; ?>
								</td>
								<td>
									<?php echo $rec['date']; ?>
								</td>
								<td>
									<a href='leave_track_status.php?id=<?php echo $rec['leaveid'];?>'><input type='button' value='View' data-toggle="tooltip" data-placement="top" title="View Status" class='btn btn-info'/></a>
								</td>
							</tr>
					</tbody>
				<?php
					}
					echo"</table>";
				?>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
	<script>
		$(function () {
		$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	<?php include('footer.php');?>