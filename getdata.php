<?php 
$con = mysqli_connect("localhost", "root", "", "subham");
$sql = "select * from viewdata order by id asc";
$result = mysqli_query($con, $sql);

echo "<tr>
		<th>Sl No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Actions</th>
	</th>";
while($row = mysqli_fetch_array($result)){
	$id = $row['id'];
	$name = $row['fname'];
	$email = $row['email'];

	echo "<tr>
			<td>$id</td>
			<td>$name</td>
			<td>$email</td>
			<th><button class='btn' id='$id' onclick='viewFun(this)'>View</button>&emsp;<button class='btn' id='$id' onclick='editFun(this)'>Edit</button></th>
		</th>";
}






 ?>