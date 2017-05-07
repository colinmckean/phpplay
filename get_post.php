<?php
define("TITLE", "Working with GET and POST");
if (isset($_POST["post_sumbit"])) {
   function validateFormData($formData ){
       $formData = trim(stripslashes( htmlspecialchars($formData ) ) );
       return $formData;
   }
   if( !$_POST["post_name"] ){
       $nameError = "please enter your name <br>";
   }else{
       $name= validateFormData( $_POST["post_name"] );
   }
   
   if( !$_POST["post_email"] ){
       $emailError = "please enter your email <br>";
   }else{
       $email= validateFormData( $_POST["post_email"] );
   }
   
   
}
?>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
    <div>
        <h1><?php echo TITLE; ?></h1>
        <!--form details are submitted via url parameters-->
        <h4>Submit VIA GET</h4>
        <form action="form_get.php" method="GET">
            <input type="text" name="name" placeholder="name"/>
            <input type="text" name="email" placeholder="email"/>
            <input name="form_sumbit" type="submit" value="Submit"/>
        </form>      
        <hr>
        <!--details are sent via HTTP request-->
        <h4>Submit via POST</h4>
        <form action="form_post.php" method="POST">
            <input type="text" name="post_name" placeholder="name"/>
            <input type="text" name="post_email" placeholder="email"/>
            <input name="post_sumbit" type="submit" value="Submit"/>
        </form>
        
        <hr>
        <h4>Submit to current page</h4>
        <p class="text-danger"> * Required fields</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <small class="text-danger"> *<?php echo $nameError ?></small>
            <input type="text" name="post_name" placeholder="name"/><br><br>
            <small class="text-danger"> *<?php echo $emailError ?></small>
            <input type="text" name="post_email" placeholder="email"/><br><br>
            <input name="post_sumbit" type="submit" value="Submit"/>
        </form>
        
    </div>
	<?php
	if (isset($_POST["post_sumbit"]) ) {
	    echo "<h4> Your info </h4>";
	    echo "$name <br> $email <br>";
	}
	?>
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>