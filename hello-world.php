<?php
define("TITLE", "Learning about PHP variables and constants");
?>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
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
	
	
	<?php
	//Arrays
	
	$user = array("colinmckean", "Colin McKean", 34, "male", "UK");
	echo '<br>';
	echo $user[0] . "<br>";
	echo $user[1] . "<br>";
	echo $user[2] . "<br>";
	echo $user[3] . "<br>";
	echo $user[4] . "<br>";
	
	echo "<br>";
	//ASSOCIATIVE Arrays
	
	
	$people = array(
	    "username" => "user123",
	    "fullname" => "Jane Blogs",
	    "age" => 25,
	    "gender" => "female",
	    "country" => "Spain"
	    );
    echo $people["username"] ."<br>";
    echo $people["fullname"] ."<br>";
    echo $people["age"] ."<br>";
    echo $people["gender"] ."<br>";
    echo $people["country"] ."<br>";
    
    //MULTI-DIMENSIONAL Arrays
    
    $employees = array(
        array(
            "username" => "user123",
    	    "fullname" => "Jane Blogs",
    	    "age" => 25,
    	    "gender" => "female",
    	    "country" => "Spain"
            ),
        array(
            "username" => "user321",
    	    "fullname" => "Joe Blogs",
    	    "age" => 29,
    	    "gender" => "male",
    	    "country" => "Canada"
            )
        );
        echo '<br>';
        
    echo $employees[0]["fullname"] . '<br>';
    echo $employees[1]["fullname"] . '<br>';
	?>
	
	
	
	
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>