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
						<th>Date</th>
						<th>Mobile</th>
						<th>Message</th>
					</tr>
				</thead>
				<tbody>

<?php
$sql = "SELECT * FROM `contact_mail`";
$query = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($query)) {
	$contact_id = $row['contact_id'];
	$name = $row['name'];
	$email = $row['email'];
	$date = $row['date'];
	$mobile = $row['mobile'];
	$message = $row['message'];
	echo "
		<tr>
			<td>$name</td>
			<td>$email</td>
			<td>$date</td>
			<td>$mobile</td>
			<td>$message</td>
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