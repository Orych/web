<?php
  chmod ('/Users/', 0755);
  $test = true;
  $name = $_POST["u_name"];
  $email = $_POST["u_email"];
  $message = $_POST["u_message"];
  $fp = fopen("/Users/".$email.".txt", "w");
  $test = fwrite($fp, $name); // Запись в файл
  if ($test) echo "Данные в файл успешно занесены.";
  else echo "Ошибка при записи в файл.";
  $test = fwrite($fp, $message); // Запись в файл
  if ($test) echo "Данные в файл успешно занесены.";
  else echo "Ошибка при записи в файл.";
?>