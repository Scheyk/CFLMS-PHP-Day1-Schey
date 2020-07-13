<!DOCTYPE html>
<html lang="en">
<head>
	<title>basic1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<?php
	#exercise 1
	$myName = "Kathrin Schey";
		echo "<h1>$myName</h1>";
		echo "<br>";
		echo "<br>";

	#exercise2
	$day = "Monday";
	if($day == "sun")
		echo "have a nice Day!";
	else
		echo "Happy Monday!";
		echo "<br>";
		echo "<br>";

	#exercise 3
	$today = "mon";
	switch ($today) {
		case 'mo':
			echo "Today is monday!";
			break;
		case 'tu':
			echo "Today is dienstag!";
			break;
		case 'we':
			echo "Today is mittwoch!";
			break;
		case 'do':
			echo "Today is donnerstag!";
			break;
		case 'fr':
			echo "Today is freitaaaaaaag!";
			break;
		case 'sa':
			echo "today is samstag!";
			break;
		case 'so':
			echo "today is sonntag!";
			break;
		default:
			echo "doch ein montag...";
			break;
	}
	echo "<br>";
	echo "<br>";

	#exercise 4/1.3
	$num = 1;	
	for($i = 0; $i < 50; $i++)
	{		
		echo "$num $myName";
		$num++;
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";

	#exercise 4/2.3
	$i = 0;
	$num2 = 1;		
	while ($i < 50) 
	{		
		echo "$num2 $myName";		
		$i++;
		$num2++;
		echo "<br>";
	}
	echo "<br>";
	echo "<br>";

	#exercise 4/3.3
	$i = 0;
	$num3 = 1;
	do
	{
		$i++;
		echo "$num3 $myName";		
		$num3++;
		echo "<br>";
	} while ($i < 50);
	echo "<br>";
	echo "<br>";

	#exercise 5
	$numArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
	foreach ($numArray as $value)
	{
		echo "the value is $value <br>";
	}
	echo "<br>";
	echo "<br>";

	#exercise 6
	$associative = array(
		'mickey' => "mouse",
		'dagobert' => "duck",
		'goofy' => "wuffi",
		'brad' => "pit" );

		// echo "value of mickey is ".$associative['mickey']."<br>";
		// echo "value of dagobert is ".$associative['dagobert']."<br>";
		// echo "value of goofy is ".$associative['goofy']."<br>";
		// echo "value of brad is ".$associative['brad']."<br>";

		foreach ($associative as $key => $value) {
					echo "the value OF {$key} IS {$value} <br>";
				}		
		
	

	?>

</body>
</html>