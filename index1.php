<?php

function calculate($num1, $num2, $operation) {
  switch ($operation) {
    case '+':
      return $num1 + $num2;
    case '-':
      return $num1 - $num2;
    case '*':
      return $num1 * $num2;
    case '/':
      if ($num2 == 0) {
        return "Деление на ноль!";
      } else {
        return $num1 / $num2;
      }
    default:
      return "Некорректная операция!";
  }
}

echo calculate(5, 3, '+') . "<br>"; // Вывод: 8
echo calculate(10, 2, '-') . "<br>"; // Вывод: 8
echo calculate(4, 5, '*') . "<br>"; // Вывод: 20
echo calculate(12, 4, '/') . "<br>"; // Вывод: 3
echo calculate(10, 0, '/') . "<br>"; // Вывод: Деление на ноль!
echo calculate(7, 3, '%') . "<br>"; // Вывод: Некорректная операция!