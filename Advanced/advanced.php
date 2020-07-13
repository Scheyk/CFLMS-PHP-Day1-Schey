<!DOCTYPE html>
<html lang="en">
<head>
	<title>advanced</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="container-fluid">

	<?php

	#exercise 1
	$fahrenheit = 20;
	$umrechnung = 32;

	function convert($numb1,$numb2)
	{
		$celsius = $numb1 - $numb2;
		echo $celsius;		
	}

	convert($fahrenheit,$umrechnung);
	echo "<br>";
	echo "<br>";

	#exercise 2
	$random_verryCold = rand(0,5);
	$random_cold = rand(6,10);
	$random_pleasant = rand(11,15);
	$random_warm = rand(16,20);
	$random_hot = rand(21,40);

	// $rand_temp[] = "this is verry cold!";
	// $rand_temp[] = "this is just cold.";
	// $rand_temp[] = "this is ok...";
	// $rand_temp[] = "now it´s warm.";
	// $rand_temp[] = "wupiiii-it´s badewetter!";
	

	// $someText = array
	// (
	// 	$random_verryCold = rand(0,5);
	// 	$random_cold = rand(6,10);
	// 	$random_pleasant = rand(11,15);
	// 	$random_warm = rand(16,20);
	// 	$random_hot = rand(21,40);
	// );

	$rand = rand(1,40);
	

	switch ($rand) {
		case ($rand <= 5):
			echo '<div class="">
					this is verry cold!
						<div>
							<img class="img-fluid" src="img/1.jpg">
						<div>
				 </<div>';
			break;
		case ($rand <= 10 && $rand > 6):
			echo "this is just cold";
			break;
		case ($rand <= 15 && $rand > 11):
			echo "this is just cold";
			break;
		case ($rand <= 20 && $rand > 16):
			echo "now it´s warm";
			break;
		case ($rand > 20):
			echo "wupiiii-it´s badewetter!";
			break;		
		default:
			echo "ups...";
			break;
	}
	// if ($rand == 0 && 5)
	// {
	// 	echo "this is verry cold!";
	// }
 // if($rand == 0 and 5)
 // {
 // 	echo " this is verry cold!";
 // }

// function whatTemp()
// {	

	// for ($i = 0; $i < $someText; $i++)
	// {
		// switch ($someText) 
		// 	{
		// 	case ($random_verryCold):
		// 		echo " this is verry cold!";
		// 		break;
		// 	case ($random_cold):
		// 		echo " this is just cold.";
		// 		break;
		// 	case ($random_pleasant):
		// 		echo " this is ok...";
		// 		break;
		// 	case ($random_warm):
		// 		echo " now it´s warm.";
		// 		break;
		// 	case ($random_hot):
		// 		echo " wupiiii-it´s badewetter!";
		// 		break;		
		// 	default:
		// 		echo "ups...";
		// 		break;
		// 	}
	// }

	
// 	echo "<button onclick='whatTemp()'></button>";
// }



// whatTemp();



	

	// function show()
	// {
	// 	$rand = rand(1,40);
		
	// 	if($someText == $rand)  
	// 	{
	// 		switch ($someText) {
	// 		case 'verryCold':
	// 			echo "this is {$random_verryCold}";
	// 			break;
	// 		case 'cold':
	// 			echo "this is {$random_cold}";
	// 			break;
	// 		case 'pleasant':
	// 			echo "this is {$random_pleasant}";
	// 			break;
	// 		case 'warm':
	// 			echo "this is {$random_warm}";
	// 			break;
	// 		case 'hot':
	// 			echo "this is {$random_hot}";
	// 			break;
			
	// 		default:
	// 			echo "ups...";
	// 			break;
	// 		}
	// 	}
		
	// }

	

	// show();

	
	


	

	?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>