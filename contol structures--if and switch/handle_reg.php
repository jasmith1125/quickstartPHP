<!DOCTYPE html>
<html>
  <head class="no-js">
  <meta charset="utf-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css" media="screen">
		.error {color: red;}
		</style>
	<title>Greetings!</title>
</head>
<body>
<!--processes registration form register.php -->
<h1>Registration Results</h1>
<?php
// flag variable. represents whether or not the form was filled out completely
// booleans are case insensitive in php
$okay = TRUE;

if ($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
}

//validate email address
if(empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = FALSE;
}

//validate password
if(empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = FALSE;
}

// validate birth year
if(is_numeric($_POST['year'])) {
	$age = 2011 - $_POST['year']; //calculate age this year
	} else {
		print 'p class-"error">Please enter the year you were born as four digits.</p>';
		$okay = FALSE;
	}	
?>
</body>
</html>