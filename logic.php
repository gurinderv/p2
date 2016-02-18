<?php

$words = ['test','bank','there','their','home','computer','language','file','list','generate','general','list','bring','keyboard','laptop','word'];


#server side validations - number of words > 4, number in numwords field
$number = '';
if(isset($_POST['addNumber']) && ($_POST['addNumber']) == 'true'){
    $number = rand(0,9);
}
$symbol = '';
if(isset($_POST['addSymbol']) && ($_POST['addSymbol']) == 'true'){
    $symbol = '@';
}
$result='';

for($i = $_POST['numWords']; $i > 0; $i--){
  $result .= $words[rand(0,15)];
  if ($i > 1){
    $result .= '-';
  }
}
$output = $result.$number.$symbol;
?>
