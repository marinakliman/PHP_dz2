<?php

function getCurrentTimeWithDeclension() {
  $currentTime = time();
  $hours = date("H", $currentTime);
  $minutes = date("i", $currentTime);

  $hoursDeclension = declension($hours, ["час", "часа", "часов"]);
  $minutesDeclension = declension($minutes, ["минута", "минуты", "минут"]);

  return "$hours $hoursDeclension $minutes $minutesDeclension";
}

function declension($number, $forms) {
  $number = abs($number) % 100;
  if ($number >= 5 && $number <= 20) {
    return $forms[2];
  }
  $number %= 10;
  if ($number >= 2 && $number <= 4) {
    return $forms[1];
  }
  if ($number == 1) {
    return $forms[0];
  }
  return $forms[2];
}

echo getCurrentTimeWithDeclension(); // Вывод: 16 часов 47 минут

?>