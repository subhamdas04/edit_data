<!DOCTYPE html>
<html>
<head>
	<title>Update Info</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<style type="text/css">
		.main{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 600px;
			height: auto;
			border: 1px solid red;
			border-radius: 10px;
		}
		table{
			width: 90%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		td, th{
			border: 1px solid black;
		}
		.btn{
			width: auto;
			height: 30px;
			padding-left: 10px;
			padding-right: 10px;
			cursor: pointer;
			border: 0;
			outline: 0;
			background: orange;
			color: white;
		}
		.btn:active{
			background: red;
		}
		.over{
			display: none;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
		}
		.child{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 500px;
			height: auto;
			border-radius: 10px;
			background: #fff;
		}
		.textbox{
			width: 95%;
			height: 30px;
			outline: none;
			border: 1px solid red;
			border-radius: 10px;
			margin-bottom: 5px;
			margin-top: 5px;
		}
	</style>

	<script type="text/javascript">
		function closeFun(){
			document.getElementsByClassName("over")[0].style.display = "none";
		}
	</script>

	<script type="text/javascript">
		function cancelFun(){
			document.getElementsByClassName("over")[1].style.display = "none";
		}
	</script>

</head>
<body>
	<center>
		<div class="main">
			<h2>View and Edit data</h2>
			<table id="ta">
				
			</table>
		</div>
	</center>
	<div class="over">
		<div class="child">
			<h2>View Data</h2>
			<table id="ta2">
				
			</table>
			<button class="btn" style="margin-bottom: 20px;" onclick="closeFun()">Close</button>
		</div>
	</div>

	<div class="over">
		<div class="child">
			<h2>Edit Data</h2>
			<table id="ta3">
				
			</table>
			<div style="margin-bottom: 20px;">
				<button class="btn" id="update">Update</button>&emsp;
				<button class="btn" onclick="cancelFun()">Cancel</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				type: "GET",
				url: "getdata.php",
				success: function(data){
					document.getElementById("ta").innerHTML+=data;
				}
			});
		});
	</script>
	<script type="text/javascript">
		function viewFun(eve){
			var a = eve.id;
			document.getElementById("ta2").innerHTML="";
			$.ajax({
				type: "GET",
				url: "getview.php",
				data: {
					p: a
				},
				success:function(data){
					document.getElementsByClassName("over")[0].style.display = "flex";
					document.getElementById("ta2").innerHTML+=data;
				}
			});
		}
	</script>

	<script type="text/javascript">
		function editFun(eve){
			var a = eve.id;
			document.getElementById("ta3").innerHTML="";
			$.ajax({
				type: "GET",
				url: "getedit.php",
				data: {
					p: a
				},
				success: function(data){
					document.getElementsByClassName("over")[1].style.display = "flex";
					document.getElementById("ta3").innerHTML+=data;
				}
			});
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#update').click(function(){
				var a = document.getElementsByName("fname")[0].value;
				var b = document.getElementsByName("email")[0].value;
				var c = document.getElementsByName("contact")[0].value;

				$.ajax({
					type:"GET",
					url: "update.php",
					data: {
						p: a,
						q: b,
						r: c
					},
					success: function(data){
						alert(data);
						location.reload();
					}
				});
			});
		});
	</script>

</body>
</html>