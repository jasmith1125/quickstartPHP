<!DOCTYPE html>
<html>
  <head class="no-js">
  <meta charset="utf-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Greetings!</title>
</head>
<body>
<!-- Script 3.4.1 - calculator.html-->
<div><p>Fill out this form to calculate the cost:</p>
	<form action="handle_calc.php" method="post">

		<p>Price: <input type="text" name="price" size="5" /></p>

		<p>Quantity: <input type="text" name="quantity" size="5" /></p>

		<p>Discount: <input type="text" name="discount" size="5" /></p>

		<p>Tax: <input type="text" name="tax" size="3" /> (%)<p>

		<p>Shipping method: <select name="shipping">
			<option value="5.00">Slow and steady</option>
			<option value="8.95">Put a move on it</option>
			<option value="19.36">I need it yesterday</option>
		</select></p>

		<p>Number of payments to make:
			<input type="text" name="payments" size="3" /></p>

			<input type="submit" name="submit" value="Calculate!" />

		</form>

	</div>
</body>
</html>
