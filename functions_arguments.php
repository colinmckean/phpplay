<?php
define("TITLE", "Functions");
?>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
	<?php
		function myFirstPhpFunction(){
			$count = 0;
			
			do {
				echo "$count &nbsp;";
				$count++;
			}while( $count <= 100 );
		}
		
		myFirstPhPFunction();
		
		function mySecondFunction($a){
			do {
				echo "$a &nbsp;";
				$a++;
			}while( $a <= 10);
		}
		
		mySecondFunction(3);
		
		function addTogether($num1, $num2){
			$newNum = $num1 + $num2;
			echo "$num1 + $num2 = $newNum";
		}
		
		addTogether ( 139, 10 );
		
		
	?>
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>