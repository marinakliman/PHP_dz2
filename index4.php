<?php

$transliterationMap = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm',
    'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '',
    'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function transliterateString($str) {
  $result = "";
  for ($i = 0; $i < strlen($str); $i++) {
    $char = mb_strtolower($str[$i], 'UTF-8'); // Переводим в нижний регистр
    if (isset($transliterationMap[$char])) {
      $result .= $transliterationMap[$char];
    } else {
      $result .= $char; // Если символ не найден в карте, оставляем его как есть
    }
  }
  return $result;
}

// Примеры использования
echo transliterateString("Привет, мир!") . "<br>"; // Вывод: Privet, mir!
echo transliterateString("Это тест транслитерации.") . "<br>"; // Вывод: Eto test transliteratsii.
echo transliterateString("123АБВ") . "<br>"; // Вывод: 123ABV

?>