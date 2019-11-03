<html>
	
	<head>
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
		
		<?php
		
		$conn = mysql_connect("localhost","root","") or die(mysql_error());
		
		mysql_select_db("sdl");
		
		$username = isset($_POST['username'])?$_POST['username']:null;
		$password = isset($_POST['password'])?$_POST['password']:null;
		
		$q_ver = "select * from login where username='$username' and password = '$password'";
		
		$result = mysql_query($q_ver);
		
		$count=mysql_num_rows($result);
		
		if ($count==1)
		{
			Print "<p class = header>Welcome ".$username."</p>";
			while($row = mysql_fetch_assoc($result))
			{	
				include 'aphp.php';
				
			}
			
			
		}
		else
		{
			Print "<h3 id = fail>Your Login Name or Password is invalid</h3>";
		}
		
		
		?>
		
		
		
		
	</body>
	
	
	
</html>