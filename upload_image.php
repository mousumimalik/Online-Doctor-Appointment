<?php
include 'config.php';
if (isset($_POST['image_upload_btn'])) {
	$details = $_POST['image_details'];
	$f_name = $_FILES['image_name']['name'];
	$f_temp = $_FILES['image_name']['tmp_name'];
	$f_size = $_FILES['image_name']['size'];
	$f_extension = explode('.', $f_name);
	$f_extension = strtolower(end($f_extension));
	$store = "image/" . $f_name;

	if ($f_extension === "jpg" || $f_extension == "png" || $f_extension == "gif" || $f_extension == "jpeg") {
		if ($f_size >= 3000000) {
			?>
			<script type="text/javascript">
				alert("Size is too large.");
				location.replace('admin_gallery.php');
			</script>
			<?php

		} else {
			if (move_uploaded_file($f_temp, $store)) {

				$sql = "INSERT INTO `gallery`(`image`, `description`) VALUES
					('$f_name','$details');";
				$query = mysqli_query($con, $sql);
				if ($query == true) {
					?>
				<script type="text/javascript">
					alert('Image uploaded successfully!');
					location.replace('admin_gallery.php');
				</script>
			<?php
exit();
				}

			}
		}

	} else {
		?>
		<script type="text/javascript">
			alert('Error with the format of the image.Please try again!');
			location.replace('admin_gallery.php');
		</script>
		<?php

	}
}
?>