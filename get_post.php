<?php
define("TITLE", "Working with GET and POST");
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
        <form action="form_get.php" method="GET">
            <input type="text" name="name" placeholder="name"/>
            <input type="text" name="email" placeholder="email"/>
            <input name="form_sumbit" type="submit" value="Submit"/>
        </form>        
        <!--details are sent via HTTP request-->
        <form action="form_post.php" method="POST">
            <input type="text" name="post_name" placeholder="name"/>
            <input type="text" name="post_email" placeholder="email"/>
            <input name="post_sumbit" type="submit" value="Submit"/>
        </form>
        
    </div>
	<?php
    
		
		
	?>
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>