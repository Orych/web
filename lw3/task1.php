<?php
  header("Content-Type: text/plain");
  function getGETParameter($parameter) {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  };
  $str = getGETParameter("text");
  $i = 0;
  while ($i < strlen($str) & $str[$i] == " ") $i++;
  while ($i < strlen($str)) {
    if ($str[$i] != " ") {
      echo $str[$i];
      $i++;
    } else {
      while ($str[$i] == " "  & $i < strlen($str)) $i++;
      if ($i != strlen($str)) echo " " ;
    };
  };
echo "#";