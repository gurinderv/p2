<?php

$words = ['test','bank','there','their','home','computer','language','file','list','generate','general','list','bring','keyboard','laptop','word'];

$result='';
$msg='';
$output='';

if(empty($_POST['numWords'])){
  $msg = "You didn't enter a valid number of words, so I chose 4.";
  $numWords = 4;
} else if(!is_numeric($_POST['numWords'])){
    $msg = "You did not enter a valid number of words, so I chose 5.";
    $numWords = 5;
} else {
    $numWords = $_POST['numWords'];
}

$number = '';
if(isset($_POST['addNumber']) && ($_POST['addNumber']) == 'true'){
    $number = rand(0,9);
}
$symbol = '';
if(isset($_POST['addSymbol']) && ($_POST['addSymbol']) == 'true'){
    $symbol = '@';
}

for($i = $numWords; $i > 0; $i--){
  $result .= $words[rand(0,15)];
  if ($i > 1){
    $result .= '-';
  }
}


$output = $result.$number.$symbol;
?>
