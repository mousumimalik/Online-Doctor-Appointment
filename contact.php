<?php include "header.php";?>
<?php include "navbar.php";?>

<!--appointment form-->
<center>
	<h3>Contact Us</h3>
<br><br>

<!--**************PHP code for inserting data into database***********-->

<?php
include 'config.php';
if (isset($_POST['contact_submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$mobile = $_POST['mobile'];
	$msg = $_POST['msg'];

	if (!empty($name) && !empty($email) && !empty($date) && !empty($mobile) && !empty($msg)) {

		$sql = "INSERT INTO `contact_mail`(`name`, `email`, `date`, `mobile`, `message`) VALUES
			('$name','$email','$date','$mobile','$msg')";

		$query = mysqli_query($con, $sql);

		if ($query == true) {
			echo "<strong style='color:#1FB400; font-size:15px;'>We have recieved your message. We will contact you shortly. Thank You!</strong>";
			$query = false;
		}

	} else {
		echo "<strong style='color:red; font-size:15px;'>Please fill all the fields</strong>";
	}

}
?>

</center>
<div class="container">
	<div class="row">
		<div class="col-lg-offset-2 col-lg-8">
			<form action="" method="post">
				<div class="row">
					<div class="col-lg-6">
			    <div class="form-group">
			      <label for="name">Name</label>
			      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
			    </div>
				</div>
				<div class="col-lg-6">
			    <div class="form-group">
			      <label for="email">Email</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter Email-Id" name="email">
			    </div>
					</div>
				</div>

				<div class="row">
				<div class="col-lg-6">
			    <div class="form-group">
			      <label for="appointment_date">Date</label>
			      <input type="date" class="form-control" id="date" name="date">
				  <small>Please select a valid Date.</small>
			    </div>
				</div>
				<div class="col-lg-6">
			    <div class="form-group">
			      <label for="mobile">Mobile Number</label>
			      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" maxlength="10">
			    </div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
			    <div class="form-group">
			      <label for="msg">Message</label>
			      <textarea class="form-control" id="msg" name="msg" rows="3" placeholder="Enter your message"></textarea>
			    </div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
			    <div class="form-group">
				<input type="submit" class="btn btn-primary" name="contact_submit" id="submit" value="Submit">
				</div>
				</div>
				</div>

			</form>
		</div>
	</div>
</div>
<br><br><br>
<?php include "footer.php";?>
