<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$name = $password = $email = "";

		$name = $_POST["name"];
		$passwordClient = strval($_POST["password"]);
		$email =  $_POST["email"];


		$servername = "library.com";
		$username = "root";
		$password = "password";
		$dbname = "library";

		//Create connection
		$conn = mysqli_connect($servername,$username,$password,$dbname);

		//Check connection
		if(!$conn){
			die("Connection failed: ". mysqli_connect_error());
		}

		echo "Connected successfully\n";

		$sql = "INSERT INTO clients (full_name,email,password )
		VALUES ('$name','$email','$passwordClient');";

		if(mysqli_query($conn,$sql)){
			echo "New record created successfully";
		}
		else{
			echo "Error: ". $sql . "<br>". mysqli_error($conn);
		}

		mysqli_close($conn);

	?>
</body>
</html>