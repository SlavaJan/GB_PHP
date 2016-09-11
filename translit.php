<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  function translit ($str) {
    $ruEn = array (
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g',
    'д' => 'd', 'е' => 'e', 'ё' => 'yo','ж' => 'zh',
    'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
    'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts',
    'ч' => 'ch','ш' => 'sh','щ' => 'sch','э' => 'e',
    'ы' => 'y', 'ю' => 'yu','я' => 'ya', 'ь' => "'",
    'ъ' => "'",

    'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',
    'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO','Ж' => 'ZH',
    'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K',
    'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
    'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
    'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'TS',
    'Ч' => 'CH','Ш' => 'SH','Щ' => 'SCH','Э' => 'E',
    'Ы' => 'Y', 'Ю' => 'YU','Я' => 'YA', 'Ь' => "'",
    'Ъ' => "'"
  );
      $result = strtr($str, $ruEn);

      $result = preg_replace(('/\s+/'), "_", $result);

      echo $result;

  }
translit ("Здоровки - приветики!11");
  ?>
</body>
</html>
