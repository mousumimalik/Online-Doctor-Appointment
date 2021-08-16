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
            <div class="panel panel-default">
            <div class="panel-heading">
               Upload the details
            </div>

            <!-- /.panel-heading -->

            <div class="panel-body">
  			       <form action="upload_image.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="image">Image</label>
                      <input type="file" class="form-control-file" id="image" name="image_name" placeholder="Item Name">
                  </div>
                  <div class="form-group">
                    <label for="image_details">Details</label>
                    <input type="text" class="form-control" id="image_details" name="image_details" placeholder="Image Details">
                  </div>
                  <button type="submit" class="btn btn-primary" name="image_upload_btn">Upload</button>
                </form>
				    </div>
				<!-- /.panel-body -->
				</div>

<br><br>

<!--*******************Image Details Fetching*****************************************-->
		<div class="panel panel-default">
                <div class="panel-heading">
                    Uploaded Images Detail
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<form action="gallery_delete.php" method="post">

<?php
$sql = "SELECT * FROM `gallery` WHERE `active`=1";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($query)) {
	$image_id = $row['id'];
	$img_name = $row['image'];
	$img_details = $row['description'];
	$status = $row['active'];

	echo "
<tr class='gradeA'>
<td>
<img src='image/$img_name' style='height: 75px; width: 65px;
margin-left: 40px;'>
</td>
<td>$img_details</td>
<input type='hidden' name='id' value='$image_id'>
<td>
<input type='submit' class='btn btn-danger' name='delete' data-toggle='tooltip' data-placement='bottom' title='Delete' value='Delete'>

</td>
</tr>
";
}
?>
</form>
                         </tbody>
                    </table>
                  </div>
                </div>
            </div>

		</div>
	</div>
</div>

<?php include "footer.php";?>