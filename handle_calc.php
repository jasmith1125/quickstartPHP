<!DOCTYPE html>
<html>
  <head class="no-js">
  <meta charset="utf-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Product Cost Calculator</title>
	<style type="text/css" media="screen">
	.number {font-weight: bold;}</style>
</head>
<body>
	<?php //script 4.2 - handle_calc.php

	//get the values from the $_POST array:
	$price = $_POST['price'];
	$quantity = $_POST['price'];
	$discount = $_POST['discount'];
	$tax = $_POST['tax'];
	$shipping = $_POST['shipping'];
	$payments = $_POST['payments'];

	//calculate the total:
	$total = $price * $quantity;
	$total = $total + $shipping;
	$total = $total - $discount;

	//determine the tax rate:
	$taxrate = $tax/100;
	$taxrate = $taxrate + 1;

	//factor in the tax rate:
	$total = $total * $taxrate;

	//calculate the monthly payments:
	$monthly = $total / $payments;

	//print out the results
	print "<p>"You have selected to purchase:<br />
	<span class="number">$quantity</span> widgets at<br />
	$<span class="number">$price</span>price each plus a<br />
	


</body>
</html>
