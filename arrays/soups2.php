<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.1 - soups1.php
/* This script creates and prints out an array. */
// Address error management, if you want.

// Create the array:
$soups = array (
'Monday' => 'Clam Chowder',
'Tuesday' => 'White Chicken Chili',
'Wednesday' => 'Vegetarian'
);

//count and print the number of elements
$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

//add three more elements to the array:
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';

//recount number of elements in array
$count2 = count($soups);
print "<p>After adding 3 more soups, the array now has $count2 elements.</p>";


// Print the contents of the array:
print_r ($soups);
echo '<br>';
echo '<br>';
//experiment with var_dump() function
$evens = range(0, 100, 2);
var_dump($evens);

$day = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
$soup = ['Clam Chowder', 'White Chicken Chili', 'Vegetarian', 'Chicken Noodle', 'Tomato', 'Cream of Broccoi'];
//fastest way to access all values of an array is a foreach loop
foreach ($soups as $day => $soup) {
	print "<p>Key is $day. Value is $soup</p>";
}

?>
</body>
</html>