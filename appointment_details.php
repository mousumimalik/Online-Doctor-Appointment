<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("location:admin.php");
}
?>

<?php include "header_admin.php";
include 'config.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2"><?php include "sidebar.php";?></div>
		<div class="col-lg-offset-1 col-lg-9">
			<br>
			<table class="table table-bordered table-responsive table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Age</th>
						<th>DOB</th>
						<th>Appointment Date</th>
						<th>Mobile</th>
						<th>Gender</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>

<?php
$sql = "SELECT * FROM `appointment_details`";
$query = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($query)) {
	$appointment_id = $row['appointment_id'];
	$name = $row['name'];
	$email = $row['email'];
	$age = $row['age'];
	$dob = $row['dob'];
	$appointment_date = $row['appointment_date'];
	$mobile = $row['mobile'];
	$gender = $row['gender'];
	$address = $row['address'];
	echo "
		<tr>
			<td>$name</td>
			<td>$email</td>
			<td>$age</td>
			<td>$dob</td>
			<td>$appointment_date</td>
			<td>$mobile</td>
			<td>$gender</td>
			<td>$address</td>
		</tr>
	";
}

?>
				</tbody>
			</table>

		</div>
	</div>
</div>

<?php include "footer.php";?>