<?php
define("TITLE", "If, Else & Elseif Statements");
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
        $foo = 99;
        $bar = 79;
        if($foo > $bar){
            //double quotes allow string interpolation single quotes would need to use concatenation
            echo "$foo is greater than $bar <br>";
        }
       
        // else
        $currentlListeningTo = "Elvis";
        if($currentlListeningTo == "Jam"){
            echo "You are listening to $currentlListeningTo";
        }else{
            echo "I have no idea what you are listening to I thought it was $currentlListeningTo";
        }
        
        // if elseif
        echo "<br>";
        $favProgrammingLanguage = "PHP";
        if($favProgrammingLanguage == "Ruby"){
            echo "You fav programming language is $favProgrammingLanguage!?";
        }elseif ($favProgrammingLanguage == "PHP") {
            echo "Impressive, you are finding your way with $favProgrammingLanguage";
        }else {
            echo "I hope you do actually like programming";
        }
        ?>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>