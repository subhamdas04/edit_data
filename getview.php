<?php 
$p = $_GET['p'];
$con = mysqli_connect("localhost", "root", "", "subham");
$sql = "select * from viewdata where id='$p'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result)){
	$id = $row['id'];
	$name = $row['fname'];
	$email = $row['email'];
	$contact = $row['contact'];

	echo "<tr>
			<th style='width: 150px;'>ID</th>
			<td>$id</td>
		</tr>
		<tr>
			<th>Name</th>
			<td>$name</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>$email</td>
		</tr>
		<tr>
			<th>Contact</th>
			<td>$contact</td>
		</tr>";
}






 ?>