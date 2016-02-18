<!DOCTYPE HTML>
<html>

<head>

<?php require('logic.php'); ?>
<title>Password Generator - P2</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<h1>xkcd Password Generator</h1>
<p>
Your password is: <?php echo $output ?> <br>
<?php echo $msg ?>
</p>

<form action='index.php' method="post">
  <fieldset>
    <legend class="generateOptions">Password Options</legend>
  <label># of Words<input type="text" name="numWords">(Max 5)</input><br/>
  <label><input type="checkbox" name="addNumber" value='true'>Add a Number</input><br/>
  <label><input type="checkbox" name="addSymbol" value='true'>Add a Symbol</input><p>
  <button type="submit">Generate Password!</button>
</fieldset>
</form>

</body>

</html>
