<html>
	<head>
		<title>CIBIL calculator</title>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<link rel="stylesheet" href="astyle.css">
		
	</head>
	<body>
		<div class="container">
		
		
		
			<div id = "header">CIBIL Calculator</div>
			
			<div class = "admin" align = "right"><a href="">Admin Login</a></div>
			
			<form action="aphp.php" method="post">
			
				<span class = "personal" style = "overflow-y: scroll">
			
			
			<div class = "form1">
				
				<div class="op" name = "name">Name:<input type="text" ></div>
				
				<div class="op" name = "contact">Contact:<input type="Number"></div>
				
				<div class="op" name = "age">Age:<input type="Number" id = "age"></div>
				
				<div class="op" id = "email" name = "email">Email:<input type="email"></div>
				
				<div class="op" name = "country">Country:<input type="text"></div>
				
				
				<div class = "op" id ="gender">Gender
					<br>Male:<input type="Radio" name = "gender"><br>
					Female:<input type="Radio" name = "gender"><br>
					Other:<input type="Radio" name = "gender" checked>
				</div>
				
				
			</div>
		
			</span>
			
			
			<span class = "financial" style="overflow-y: scroll">
				
				<div class = "form2">
					
				<div class = "op">Profession:<input type="text" name = "profession"></div>
				
				<div class = "op">Monthly Salary:<input type="Number" id = "salary" name = "salary"></div>
				
				<div class = "op">Previous Loans Taken:<input type="Number" id = "loans" name = "loans"></div>
				
				<div class = "op">No. of days overdue:<input type="Number" id = "overdues" name = "overdues"></div>
					
				<div class = "op">Credit Balance:<input type="Number" id = "credit" name = "credit"></div>	
					
					
				</div>
					
			</span>
			
			
			<input type="submit" class = "btn btn-primary" id ="buton">
			</form>	
			
		</div>
		
		<script src = "ascript.js"></script>
		
		<?php  Print "$_SERVER['PHP_SELF']"  ?>
	</body>
	
</html>


