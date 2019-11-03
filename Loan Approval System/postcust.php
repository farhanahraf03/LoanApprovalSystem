<html>
	
	<head>
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
		
		<?php
		
		$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
		
		mysqli_select_db($conn,"sdl");
		
		$username = isset($_POST['username'])?$_POST['username']:null;
		$password = isset($_POST['password'])?$_POST['password']:null;
		
		$q_ver = "select * from cust_login where username='$username' and password = '$password'";
		
		$result = mysqli_query($conn,$q_ver);
		
		$count=mysqli_num_rows($result);
		
		if ($count==1)
		{
			while($row = mysqli_fetch_assoc($result))
			{	
				header('Location:a.html');
				
			}
			
			
		}
		else
		{
			Print "<h3 id = fail>Invalid username or password</h3>";
			Print '<center><a href="first.html">Login Again</a></center>';
		}
		
		
		?>
		
		
		
		
	</body>
	
	
	
</html>
