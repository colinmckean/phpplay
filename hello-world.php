<?php
define("TITLE", "Learning about PHP variables and constants");
?>
<html>
<head>
    <title><?php echo TITLE; ?></title>
</head>
<body>
	<?php
	echo 'Hello world from Cloud9!<br>';
	?>
	<?php
	$name = "Colin";
	echo "Hello " . $name ."<br>";
	?>
	<?php
//some typical variables
//BOOLEAN
	$hungry = true;
//INTEGER
	$myHungerLevel = 100;
//FLOAT
	$percentageOfFoodAte = 99.7;
//STRING
	$fullName = "Colin McKean";
	echo "Hello my name is $fullName I have ate $percentageOfFoodAte% of the food in my cupboards.";
// CONSTANT
// see title for an example
	define("TITLE", "Learning about PHP variables and constants");
	?>
	
</body>
</html>