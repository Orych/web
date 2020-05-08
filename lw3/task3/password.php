<?php
  header('Content-Type: text/plain');
  $text = $_GET['password'];
  function checkIdentifier($text) {
    $i = 0;
    $k = 0;
    $smallet = 0;
    $biglet = 0; 
    $numberscore = 0;
    $allowedSymbols = 'qwertyuiopasdfghjklzxcvbnm1234567890';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $smalletters = 'qwertyuiopasdfghjklzxcvbnm';
    $bigletters = 'QWERTYUIOPASDFGHJKLZXCVBNM';
    $numbers = '1234567890';
    while ($i < strlen($text)) {
      if (stripos($numbers, $text[$i]) === true){ 
        $k = k + 4 ;
        $numberscore++;
      };
      $i++;
    };
    if (stripos($smalletters, $text[$i]) === true)
      $smallet++ ;
    if (stripos($bigletters, $text[$i]) === true)
      $biglet++ ;
    foreach (count_chars($text, 1) as $i => $val){
      $k = $k - $val;
    };
    $k = 4 * strlen($text);
    $k = $k + ($numberscore * 4);
    if ($smallet != 0) $k = $k + ((strlen($text)-$smallet)*2);
    if ($biglet != 0) $k = $k + ((strlen($text)-$biglet)*2);
    if ($numberscore = 0) $k = $k - strlen($text);
    if ($numberscore == strlen($text)) $k = $k - strlren($text);
    $i++;
    echo $k;
  return $k;
  }
  checkIdentifier($text);