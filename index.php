<!DOCTYPE HTML>
<html>

<head>

<?php require('logic.php'); ?>
<title>Password Generator - P2</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<!--
1. input for how many words to use
2. whether to include a number
3. whether to include a special symbol (like @)
4. basic server-side validation

Optional:
1. more configs: how many special chars, different special chars, max length, all upper, lower, first letter upper, etc
2. scrape an online word list to build really long strings
-->

<h1>xkcd Password Generator</h1>
<p>
<!--  Your password is:  -->
</p>

<form action='index.php' method="post">
  <fieldset>
    <legend class="generateOptions">Password Options</legend>
  <label># of Words<input type="text" name="numWords">(Max 5)</input><br/>
  <label><input type="checkbox" name="addNumber">Add a Number</input><br/>
  <label><input type="checkbox" name="Add a symbol">Add a Symbol</input><p>
  <button type="submit" name="generate">Generate Password!</button>
</fieldset>
</form>

</body>

</html>
