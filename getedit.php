<?php 
	$p = $_GET['p'];
	$con = mysqli_connect("localhost", "root", "", "subham");
	$sql = "select * from viewdata where id='$p'";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($result)){
		$name = $row['fname'];
		$email = $row['email'];
		$contact = $row['contact'];
	}

	echo "<tr>
					<th>Name</th>
					<th><input type='text' name='fname' class='textbox' value='$name'></th>
				</tr>
				<tr>
					<th>Email</th>
					<th><input type='text' name='email' class='textbox' value='$email'></th>
				</tr>
				<tr>
					<th>Contact</th>
					<th><input type='text' name='contact' class='textbox' value='$contact'></th>
				</tr>";


 ?>