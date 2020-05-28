<?php
  $directory = "data/";
  mkdir($directory, 0777, true);
  $test = true;
  $directory = $directory.$_post["e_mail"]. ".txt";
  $information = fopen($directory, "w");
  fwrite($information, 'Имя: '. $_post["first_name"]. "\n");
  fwrite($information, 'email: '. $_post["e_mail"]. "\n");
  fwrite($information, 'Пол: '. $_post["gender"]. "\n");
  fwrite($information, 'Страна: '. $_post["country_choice"]. "\n");
  fwrite($information, 'Сообщение: '. $_post["message"]. "\n");
  fclose($information);
?>