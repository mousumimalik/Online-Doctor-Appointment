<?php
include 'config.php';
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$sql = "UPDATE `gallery` SET `active`=0 WHERE `id`=$id";
	$query = mysqli_query($con, $sql);
	if ($query == true) {
		?>
			<script type="text/javascript">
				alert('Image deleted successfully!');
				location.replace('admin_gallery.php');
			</script>

		<?php
}
}
?>