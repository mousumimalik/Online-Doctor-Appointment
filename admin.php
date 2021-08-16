<?php
session_start();
if (isset($_SESSION['id'])) {
	header("location:admin_profile.php");
}
?>
<?php include "header.php";?>
<?php include "navbar.php";?>
<!--login form-->
<br>
<center>
	<h3>Admin Login</h3>

<!--*************** PHP code for  displaying error messages**********************-->

<?php
if (isset($_SESSION['error'])) {
	echo "<strong style='color:red; font-size:15px;'>" . $_SESSION['error'] . "</strong>";
	session_destroy();
}
?>
<!--****************************ends**************************************************-->
</center>
<div class="container">
	<div class="row">
		<div class="col-lg-offset-2 col-lg-8">
			<form action="admin_login.php" method="post">
				<div class="row">
					<div class="col-lg-12">
			    	<div class="form-group">
			     	<label for="username">Username</label>
			      	<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
			  		</div>
					</div>

					<div class="col-lg-12">
				    <div class="form-group">
				      <label for="password">Password</label>
				      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
				    </div>
					</div>
				</div>

				<div class="row">
				<div class="col-lg-12">
			    <div class="form-group">
				<input type="submit" class="btn btn-primary" name="admin_login" id="admin_login" value="Login">
				</div>
				</div>
				</div>

			</form>
		</div>
	</div>
</div>
<br>
<br><br><br><?php include "footer.php";?>
