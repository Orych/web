<?php
function writeinformation(){
  $directory = "data/";
  $fileinfo = $directory.$_GET['email'].'.txt';
  if((file_exists($fileinfo)){
    $information = fopen($fileinfo, 'r');
    readfile($information);
  }
  else{
    echo 'error '
  }
writeinformation();
?>