<?php include "header.php";?>
<?php include "navbar.php";?>
<!--appointment form-->
<center>
	<h3>Appointment Form</h3>

<!--**************PHP code for inserting data into database***********-->
<?php
include 'config.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$dob = $_POST['dob'];
	$appointment_date = $_POST['appointment_date'];
	$mobile = $_POST['mobile'];
	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
	}
	$address = $_POST['address'];

	if (!empty($name) && !empty($email) && !empty($age) && !empty($dob) && !empty($appointment_date) && !empty($mobile) && !empty($gender) && !empty($address)) {
		$sql = "INSERT INTO `appointment_details`(`name`, `email`, `age`, `dob`, `appointment_date`, `mobile`, `gender`,
			`address`) VALUES('$name','$email','$age','$dob','$appointment_date','$mobile','$gender','$address')";

		$query = mysqli_query($con, $sql);

		if ($query == true) {
			echo "<strong style='color:#1FB400; font-size:15px;'>Appointment Successfull,Thank You!</strong>";
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
			      <label for="age">Age</label>
			      <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age">
			    </div>
				</div>
				<div class="col-lg-6">
			    <div class="form-group">
			      <label for="dob">Date of Birth</label>
			      <input type="date" class="form-control" id="dob" name="dob">
				  <small>Please enter a valid Date of Birth </small>
			    </div>
					</div>
				</div>

				<div class="row">
				<div class="col-lg-6">
			    <div class="form-group">
			      <label for="appointment_date">Date of Appointment</label>
			      <input type="date" class="form-control" id="appointment_date" name="appointment_date">
				  <small>Please select a valid Date of Appointment </small>
			    </div>
				</div>
				<div class="col-lg-6">
			    <div class="form-group">
			      <label for="mobile">Mobile Number</label>
			      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile"
			       maxlength="10">
			    </div>
				</div>
				</div>

				<div class="row">
			    <div class="form-group">
				<div class="col-lg-4">
			      <label>Gender</label>
				</div>
				<div class="col-lg-4">
				 <label for="male">Male</label>
			       : <input type="radio" name="gender" id="male" value="Male">
				</div>
				<div class="col-lg-4">
				<label for="female">Female</label>
			           : <input type="radio" name="gender" id="female" value="Female">
			    </div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
			    <div class="form-group">
			      <label for="address">Address</label>
			      <textarea class="form-control" id="address" name="address" rows="3"></textarea>
			    </div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
			    <div class="form-group">
				<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">
				</div>
				</div>
				</div>

			</form>
		</div>
	</div>
</div>

<?php include "footer.php";?>
