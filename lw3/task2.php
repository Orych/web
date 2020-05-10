<?php
  header('Content-Type: text/plain');

  function checkIdentifier($text) {
    $i = 0;
    $allowedSymbols = 'qwertyuiopasdfghjklzxcvbnm1234567890';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $flag = true;
    if (stripos($letters, $text[0]) === false & strlen($text) != 0) $flag = false;
    $i++;
    while ($i < strlen($text)) {
      if (stripos($allowedSymbols, $text[$i]) === false) $flag = false;
      $i++;
    };
    return $flag;
  };

  $a = true;
  foreach($_GET as $key => $value) {
    if (checkIdentifier($key) === false) $a = false;
  };

  if ($a) echo 'yes';
  else echo 'no';