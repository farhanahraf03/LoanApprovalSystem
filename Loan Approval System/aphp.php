<html>	
<head>
			
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	
	<link rel="stylesheet" href="style2.css">
</head>
<body>
<?php 
	
	session_start();
	$conn=mysqli_connect("localhost","root","")or die(mysqli_error());
	mysqli_select_db($conn,"sdl") or die(mysqli_error());
	

	
	$name = isset($_POST['name'])?$_POST['name']:null;
	$pan = isset($_POST['pan'])?$_POST['pan']:null;
	$contact = isset($_POST['contact'])?$_POST['contact']:null;
	$age = isset($_POST['age'])?$_POST['age']:null;
	$email = isset($_POST['email'])?$_POST['email']:null;
	$country = isset($_POST['country'])?$_POST['country']:null;
	$prof = isset($_POST['profession'])?$_POST['profession']:null;
	$salary = isset($_POST['salary'])?$_POST['salary']:null;
	$ac = isset($_POST['ac'])?$_POST['ac']:null;
	$loan = isset($_POST['loans'])?$_POST['loans']:null;
//	$overdue = isset($_POST['overdues'])?$_POST['overdues']:null;
	$credit = isset($_POST['credit'])?$_POST['credit']:null;		
	$loanamt = isset($_POST['loanamt'])?$_POST['loanamt']:null;
    $loantype = isset($_POST['loantype'])?$_POST['loantype']:null;
    $dur = isset($_POST['duration'])?$_POST['duration']:null;
	
	 $_SESSION['c']= $contact;
	 $_SESSION['n']= $name;
	
	 
	
//	$name = $_POST['name'];
//	$contact = $_POST['contact'];
//	$age = $_POST['age'];
//	$email = $_POST['email'];
//	$country = $_POST['country'];
//	$prof = $_POST['profession'];
//	$salary = $_POST['salary'];
//	$loan = $_POST['loans'];
//	$overdue = $_POST['overdues'];
//	$credit = $_POST['credit'];

//	echo $name;
//	echo $contact;
//	echo $age;
//	echo $email;
//	echo $country;
//	echo $prof;
//	echo $salary;
//	echo $loan;
//	echo $overdue;
//	echo $credit;
	 
	
	
	
//	$q = "select * from customer";
//	$r = mysql_query($q);
//	
//	Print "<div class = container>";
//	Print "<h2><center>Customers</center></h2>";
//	
//	Print"<div class = logout align = right><a href=a.html>Logout</a></div>";
//
//	
//	Print "<table border cellpadding=3>";
//	Print "<tr><th>ID</th><th>Name</th><th>Contact</th><th>Email</th><th>Age</th><th>Score</th></tr>";
	
//Calc score
$score = 0;
$master = 1;
	
if($age >=18 and $age <=23)
{
	$score = $score + 200;
}
	
else if($age >=14 and $age <=29)
{
	$score = $score + 180;
}
	
else if($age >=30 and $age <=35)
{
	$score = $score + 150;
}
	
else if($age >=36 and $age <=43)
{
	$score = $score + 120;
}
	
else 
{
	$score = $score + 100;
}
	
	
if($salary >= 150000)
{
	$score = $score + 250;
}
	
else if($salary>=130000 and $salary < 150000)
{
	$score = $score + 200;
}
	
else if($salary>=100000 and $salary < 130000)
{
	$score = $score + 180;
}
	
else if($salary>=70000 and $salary < 100000)
{
	$score = $score + 150;
}
	
else if($salary>=50000 and $salary < 70000)
{
	$score = $score + 120;
}
	
else
{
	$score = $score + 100;
}
	
if($loan >= 5)
{
	$score = $score + 200;
}
	
else if($loan === 4)
{
	$score = $score + 180;
}
	
else if($loan === 3)
{
	$score = $score + 150;
}
	
else if($loan === 2)
{
	$score = $score + 120;
}
	
else if($loan === 1)
{
	$score = $score + 100;
}
	
else
{
	$score = $score + 80;
}
//	
//if($overdue === 0)
//{
//	$score = $score + 80;
//}
//	
//else if($overdue <= 7)
//{
//	$score = $score - 50;
//}
//	
//else
//{
//	$score = $score - 100;
//}
	
if($credit >= 5000)
{
	$score = $score + 200;
}
	
else if($credit > 2500 and $score < 5000)
{
	$score = $score + 100;
}
	
else if($credit < 2500 and $score >=1000)
{
	$score = $score + 80;
}
	
else if($credit < 1000 and $score >=500)
{
	$score = $score + 50;
}
	
else
{
	$score = $score + 30;
}
	
	
$ratio = $loanamt/$salary;
	
	
if($ratio>=5 and $salary>150000)
{
	$score = $score + 200;
}

else if($ratio<5 and $ratio>=4 and $salary>100000)
{
	$score = $score + 170;
}
	
else if($ratio<4 and $ratio>=3 and $salary>80000)
{
	$score = $score + 150;
}
	
else if($ratio<3 and $ratio>=2 and $salary>50000)
{
	$score = $score + 130;
}
	
else if($ratio<2 and $ratio>=1 and $salary>40000)
{
	$score = $score + 100;
}
	
else
{
	$score = $score + 70;
}

if($salary <= 50000)
{
	if($ratio <= 3)
	{
		$master = 1;
	}
	
	else
	{
		$master = 0;
	}
}
	
else if($salary > 50000 and $salary <=75000)
{
	if($ratio <= 4)
	{
		$master = 1;
	}
	
	else
	{
		$master = 0;
	}
}
	
else if($salary > 75000 and $salary <=100000)
{
	if($ratio <= 5)
	{
		$master = 1;
	}
	
	else
	{
		$master = 0;
	}
}
	
else if($salary > 100000 and $salary <=150000)
{
	if($ratio <= 6)
	{
		$master = 1;
	}
	
	else
	{
		$master = 0;
	}
}
	
else
{
	if($ratio <= 7)
	{
		$master = 1;
	}
	
	else
	{
		$master = 0;
	}
}
	
$score = $score<300?300:$score;
$score = $score>900?900:$score;
	
$_SESSION['m'] = $master;
	
echo $score;
	
//	Insert Values Into DB
	mysqli_query($conn,"insert into customer(name,pan,contact,ac_no,age,email,country,profession,salary,loans,credit,score,loanamt,loantype,duration) values('$name','$pan','$contact','$ac','$age','$email','$country','$prof','$salary','$loan','$credit','$score','$loanamt','$loantype','$dur')");
	
	
	header("location:res.php");
	
	
	//Fetch Values From DB
//	while($row = mysql_fetch_assoc($r))
//	{
//		Print "<tr><td>{$row['ID']}</td>";
//		Print "<td>{$row['name']}</td>";
//		Print "<td>{$row['contact']}</td>";
//		Print "<td>{$row['email']}</td>";
//		Print "<td>{$row['age']}</td>";
//		Print "<td>{$row['score']}</td></tr>";
//	}
//	
//	Print "</table>";
//	Print "</div>";
	

//	if( isset( $_GET["caller"] ) && $_GET["caller"] == "somevalue" ) 
//	{
//    // I'm using Location because this will remove the get value
//    header( "Location: aphp.php" );
//    exit;
//	}
//	
//	Print "<a href=aphp.php?caller=somevalue >got to index and refresh?</a>";
	
	
?>	
</body>	
</html>
