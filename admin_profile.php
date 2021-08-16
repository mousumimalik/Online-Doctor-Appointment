<?php
session_start();
if (!isset($_SESSION['id'])) {
	header("location:admin.php");
}
?>

<?php include "header_admin.php";?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2"><?php include "sidebar.php";?></div>
		<div class="col-lg-offset-1 col-lg-9">

		</div>
	</div>
</div>

<?php include "footer.php";?>