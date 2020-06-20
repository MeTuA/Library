<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$loginemail = $_POST["loginemail"];
		$passwordLog = strval($_POST["loginpassword"]);

		$severname = "site2.com";
		$username = "root";
		$password = "password";
		$db = "library";

		$conn = mysqli_connect($severname,$username,$password,$db);

		if(!$conn){
			die("Connection failed: ". mysqli_connect_error());
		}

		echo "Connected successfully\n";
		$check = 0;

		$sql = "SELECT email, password FROM clients";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
  		// output data of each row
  			while($row = mysqli_fetch_assoc($result)) {
    			if($row["email"] == $loginemail){
    				$check = 1;
    			}

    			if($row["password"] == $passwordLog){
    				$check++;
    			}
  			}
		} else {
  			echo "0 results";
		}

		mysqli_close($conn);


		if($check == 2){
			echo "<h2>You are welcome!</h2>";
		}
		else{
			echo "you have not registered or not correct password or email";
		}
	?>


</body>
</html>