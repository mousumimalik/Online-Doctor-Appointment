<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Contact</th>
        <th>Email</th>
      </tr>
    </thead>
   </table>

   <?php
$conn = mysqli_connect("localhost", "root", "", "mou") or die("Connection error");
$query = "select * from tabel";
$res = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($res)) {
	$dbname = $row["Name"];
	$dbaddress = $row["Address"];
	$dbage = $row["Age"];
	$dbdob = $row["DOB"];
	$dbgender = $row["Gender"];
	$dbcontact = $row["Contact"];
	$dbemail = $row["Email"];
	?>
	<tr>
		<td><?php echo $dbname; ?></td>
		<td><?php echo $dbaddress; ?></td>
		<td><?php echo $dbage; ?></td>
		<td><?php echo $dbdob; ?></td>
		<td><?php echo $dbgender; ?></td>
		<td><?php echo $dbcontact; ?></td>
		<td><?php echo $dbemail; ?></td>
	</tr>
	<?php
}

?>
    <tr>
	<td colspan="5" align="center"><a href="registration.php">Register</a></td>
     </tr>
