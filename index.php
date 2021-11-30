<?php
	$conn= new mysqli('localhost','root','','trydb');

	if(isset($_POST['insert'])){
		$fname=$_POST['fn'];
		$lname=$_POST['ln'];
		$Uname=$_POST['un'];
		$password=$_POST['psswrd'];

		$sql= query("INSERT INTO register(FirstName,LastName,Username,Password) VALUES('$fname','$lname','$Uname','$password')");

		if($sql){
			echo"Yes";
		}
	}
?>
<html>
<head>
	<title>Retry</title>
	<style>
		body{
			background-color: #99ccff;
		}
		fieldset{
			width: 400px;
			height: 300px;
			border-color: grey;
			border-radius: 15px;
			margin:90px;
		}
		input{
			border: none;
			border-bottom: solid 1px grey;
			background: transparent;
			outline: transparent;
		}
		button{
			padding: 10px;
			border-radius: 5px;
			background-color: #ccc;
			border-style: none;
			font-size: 18px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<center>
		<fieldset>
			<h2>Fill the form!!</h2>
			<form method="post">
				<label>First Name</label>
				<input type="tetx" name="fn"><br><br>
				<label>Last Name</label>
				<input type="tetx" name="ln"><br><br>
				<label>Username</label>
				<input type="tetx" name="un"><br><br>
				<label>Password</label>
				<input type="password" name="psswrd" max=10><br><br>
				<button name="insert">Send</button>
			</form>
		</fieldset>
	</center>
</body>
</html>