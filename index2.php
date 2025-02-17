<?php

function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case 'add':
      return calculate($arg1, $arg2, '+');
    case 'subtract':
      return calculate($arg1, $arg2, '-');
    case 'multiply':
      return calculate($arg1, $arg2, '*');
    case 'divide':
      return calculate($arg1, $arg2, '/');
    default:
      return "Некорректная операция!";
  }
}

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

// Примеры использования
echo mathOperation(5, 3, 'add') . "<br>"; // Вывод: 8
echo mathOperation(10, 2, 'subtract') . "<br>"; // Вывод: 8
echo mathOperation(4, 5, 'multiply') . "<br>"; // Вывод: 20
echo mathOperation(12, 4, 'divide') . "<br>"; // Вывод: 3
echo mathOperation(10, 0, 'divide') . "<br>"; // Вывод: Деление на ноль!
echo mathOperation(7, 3, 'mod') . "<br>"; // Вывод: Некорректная операция!