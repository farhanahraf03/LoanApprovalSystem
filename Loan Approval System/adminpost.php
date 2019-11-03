<html>
	
	<head>
	
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
		<?php

		$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
		
		mysqli_select_db($conn,"sdl");
		
		$username = isset($_POST['username'])?$_POST['username']:null;
		$password = isset($_POST['password'])?$_POST['password']:null;
		
		$q_ver = "select * from login where username='$username' and password = '$password'";
		
		$result = mysqli_query($conn,$q_ver);
		
		$count=mysqli_num_rows($result);
		
		
		if($count == 1)
		{
			Print "<a href=adminlogin.html class=lin>Logout</a><br>";
			Print "<a href=zero.html class=lin>Home</a>";
			Print "<table border cellpadding=3>";
			Print "<tr><th>ID</th><th>Name</th><th>Contact</th><th>Email</th><th>Age</th><th>Score</th></tr>";
			
			echo "<h3 id =h9>Welcome ".$username."</h3>";
			$q = "select * from customer";
			$f = mysqli_query($conn,$q);
			
			
			while($row=mysqli_fetch_assoc($f))
			{	
					
					
					Print "<tr><td>{$row['ID']}</td>";
					Print "<td>{$row['name']}</td>";
					Print "<td>{$row['contact']}</td>";
					Print "<td>{$row['email']}</td>";
					Print "<td>{$row['age']}</td>";
					Print "<td>{$row['score']}</td></tr>";
				
			}
			Print "</table>";
		}
		
		else
		{
			echo "Wrong Username/Password.";
		}



		?>
	</body>
</html>
