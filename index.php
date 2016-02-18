<!DOCTYPE HTML>
<html>

<head>

<?php require('logic.php'); ?>
<title>Gurinder Virdi's xkcd Password Generator - P2</title>
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
  <label># of Words</label><input type="text" name="numWords">(Max 5)<br/>
  <label><input type="checkbox" name="addNumber">Add a Number</label><br/>
  <label><input type="checkbox" name="addSymbol">Add a Symbol</label><p>
  <button type="submit">Generate Password!</button>
</fieldset>
</form>

</body>

</html>
