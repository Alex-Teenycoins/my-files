<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css">
        <title>Test Web-app</title>
        <script type="text/javascript" src="execvar.js"></script>
    </head>
    <body>
    <p>
    <p>Hello <?php echo $_SESSION['firstName'];?>!</p>
    <h1>Ready to save for what you wish?</br>
    <section class="centralBlock"><form id="formVar" method="post" action="target.php">
	<p>How much you want to save each time? </br>
		<label for="inputAmount"> Amount: </label>
		<input type="number" id="inputAmount" name="inputAmount" min="1" max="20" value="1"> $ </p>
	<p>Every how many days do you want to save? </br>
		<label for="inputFreq"> Fequency: </label>
		<input type="number" id="inputFreq" name="inputFreq" min="1" max="7" value="1"></p>
	<p>For how many months do you want to save? </br>
		<label for="inputDur"> Duration: </label>
		<input type="number" id="inputDur" name="inputDur" min="1" max="6" value="3"> months </p>
	</section>
	<section class="buttons"><p>
		<input type="button" value="Get total" onclick="makeTotal();">
		<input type="Submit" value="Submit" onclick="getVar();"></p></section>
</form></section>
<p>Click "Submit" and you'll start saving.</p>
    </body>
</html>