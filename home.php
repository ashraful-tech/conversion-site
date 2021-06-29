<!DOCTYPE html>
<html>
<head>
	<title>Conversion-Site</title>

	<h1>Page 1 [Home]</h1>
	<br>
	<p>Conversion Site</p>
	<a href="http://localhost/conversion-site/home.php">1.Home</a>

	<a href="https://localhost/conversion-site/conversion-rate.php">2.Conversion-site</a>

	<a href="https://localhost/conversion-site/history.php">3.History</a>
</head>
<body>

	<form action="history.php.php" method="set">

		<label for="converter">Converter:</label>

		<select name="converter" id="converter">
  		<option value="feetToincg">FeetToinch</option>
  		<option value="KgToGram">KGtoGram</option>
  		<br><br>
  		<fieldset>
		<label for="value"> Enter Your value: </label>
		<input type="text" id="value" name="value">
		</fieldset>
<input type="submit">
</form>

</body>
</html>