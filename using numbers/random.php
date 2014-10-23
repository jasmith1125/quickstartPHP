<!DOCTYPE html>
<html>
  <head class="no-js">
  <meta charset="utf-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Random Numbers</title>
	<style type="text/css" media="screen">
	.number {font-weight: bold;}</style>
</head>
<body>
	<?php //script 4.6 - random.php

	//create 3 random numbers:
	$n1 = rand(1, 99);
	$n2 = rand(1, 99);
	$n3 = rand(1, 99);

	print "<p>Your lucky numbers are:<br />
	$n1<br />
	$n2<br />
	$n3</p>";

//also look up mt_rand function
	?>


	

</body>
</html>
