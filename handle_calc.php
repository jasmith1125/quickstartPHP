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
	$quantity = $_POST['quantity'];
	$discount = $_POST['discount'];
	$tax = $_POST['tax'];
	$shipping = $_POST['shipping'];
	$payments = $_POST['payments'];

	/*calculate the total:
	$total = $price * $quantity;
	$total = $total + $shipping;
	$total = $total - $discount; */

	//more efficient way to calculate total than above
	$total = (($price * $quantity) + $shipping) - $discount;

	/* determine the tax rate:
	$taxrate = $tax/100;
	$taxrate = $taxrate + 1; */

	/* more efficient way to calculate tax rate than above:
	$taxrate = ($tax / 100) + 1; */

	//use incrementing to calculate tax rate
	$taxrate = $tax / 100;
	$taxrate++;

	//factor in the tax rate:
	$total = $total * $taxrate;

	//calculate the monthly payments:
	$monthly = $total / $payments;

	//format numbers for $total and $monthly (payment)
	$total = number_format ($total, 2);
	$monthly = number_format ($monthly, 2);

	//print out the results
	print "<p>You have selected to purchase:<br />
	<span class=\"number\">$quantity</span> widgets at<br />
	$<span class=\"number\">$price</span> price each plus a<br />
	$<span class=\"number\">$shipping</span>shipping cost and a <br />
	$<span class=\"number\">$tax</span> percent tax rate.<br />
	After  your $<span class=\"number\">$discount</span> discount, the total cost<br />
	$<span class=\"number\">$total</span>.<br />
	Divided over <span class=\"number\">$payments</span> monthly payments, that would be<br />
	$<span class=\"number\">$monthly</span>  each.</p>";

	?>

</body>
</html>
