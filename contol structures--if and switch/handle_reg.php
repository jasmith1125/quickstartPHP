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

//check that the two passwords match
if (trim($_POST['password']) != trim($_POST['confirm'])) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = FALSE;
} 

/* // validate birth year
if(is_numeric($_POST['year'])) {
	$age = 2011 - $_POST['year']; //calculate age this year
	} else {
		print '<p class-"error">Please enter the year you were born as four digits.</p>';
		$okay = FALSE;
}

//report an error if the year is greater than or equal to 2011
if($_POST['year'] >= 2011) {
	print '<p class="error">Either you entered your birth year wrong or you come from the future.</p>';
	$okay = FALSE;
} */

//more efficient year validation in nested conditional
if (is_numeric($_POST['year']) && (strlen($_POST['year']) == 4)) {
	if ($_POST['year'] < 2011){
		$age = 2011 - $_POST['year'];
	} else {
		print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
		$okay = FALSE;
	} // end of second conditional
	} else { //for first conditional
		print '<p class="error">Please enter the year you were born as four digits.</p>';
		$okay = FALSE;
} // end of first conditional

// Validate the terms
if (!isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;
}

if($_POST['color'] == 'red') {
	$color_type = 'primary';
	} elseif ($_POST['color'] == 'green') {
	$color_type = 'secondary';
	} elseif ($_POST['color'] == 'blue') {
	$color_type = 'primary';
	} elseif ($_POST['color'] == 'yellow') {
	$color_type = 'primary';
	} 
	else { //problem
		print '<p class="error">Please select your favorite color.</p>';
		$okay = FALSE;
	}
//if there are no errors, print success message and current age
if($okay) {
	print '<p>You have been successfully registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite color is a $color_type color.</p>";
}
?>
</body>
</html>