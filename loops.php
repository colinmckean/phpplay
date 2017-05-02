<?php
define("TITLE", "Loops");
?>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1><?php echo TITLE; ?></h1>
        <?php
        //While loop
        $start = 0;
        while($start <= 10){
            echo "$start &nbsp;";
            $start++;
        }
        
        //for loop
        for($count = 0; $count <= 10; $count++){
            echo "<br> $count ";
        }
        
        //foreach
        //for each (collection as element)
        $people = array("John", "Chris", "Ryan", "Ruth");
        foreach ($people as $person){
            echo "<br> $person is in the array";
        }
        
        //do while
        $numberOfCakes = 10;
        do{
            $numberOfCakes--;
            echo "<br> I'm eating cakes and there are now $numberOfCakes left";
        }while($numberOfCakes > 0);
        
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>