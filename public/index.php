<?php

// 1. Изменить регистр строки на противоположный (изначальная строка должна быть в верхнем или нижнем регистре).

echo "<h3>1. Изменить регистр строки на противоположный</h3>";

$str_convert1 = "i want to convert a string to uppercase in php with strtoupper";
$str_convert2 = "I WANT TO CONVERT A STRING TO LOWERCASE IN PHP";

if ($str_convert1 == strtolower($str_convert1)) {
    echo '<i>Регистр строки изменен на верхний: </i>'."</br>".strtoupper($str_convert1);
} else {
    echo '<i>Регистр строки изменен на нижний: </i>'."</br>".strtolower($str_convert1);
}

echo "</br></br>";

if ($str_convert2 == strtolower($str_convert2)) {
    echo '<i>Регистр строки изменен на верхний: </i>'."</br>".strtoupper($str_convert2);
} else {
    echo '<i>Регистр строки изменен на нижний: </i>'."</br>".strtolower($str_convert2);
}

// 2. Посчитать количество слов в строке

echo "<h3>2. Посчитать количество слов в строке</h3>";

echo 'Количество слов в строке: '.str_word_count($str_convert1);
echo "</br></br>";
echo 'Количество слов в строке: '.str_word_count($str_convert2);

// 3. Получите первое слово каждого предложения в тексте

echo "<h3>3. Получить первое слово каждого предложения в тексте</h3>";

$text = "<b>PHP</b> is a server side scripting language that is embedded in HTML. <b>It</b> is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. <b>It</b> is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server. <b>PHP</b> requires instructions to be terminated with a semicolon at the end of each statement. <b>The</b> closing tag of a block of PHP code automatically implies a semicolon; you do not need to have a semicolon terminating the last line of a PHP block. <b>The</b> closing tag for the block will include the immediately trailing newline if one is present.";

echo $text."</br>";

$text2 = str_replace(['!', '?'], ['.', '.'], $text);
$text2 = explode(".", $text2, -1);

echo "</br>";

foreach ($text2 as $first_word) {
    echo "Первое слово предложения - ".strtok($first_word, " ")."</br>";
}

// 4. Переведите строку в транслит

echo "<h3>4. Перевести строку в транслит</h3>";

$quote = "Кто рано встает, тому можно еще поспать. Рано же встал.";

$russian = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');

$translit = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');

echo str_replace($russian, $translit, $quote);

// 5. Вывести таблицу умножения

echo "<h3>5. Вывести таблицу умножения</h3>";

echo "<table border='1' width='20%'><tr>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>".($i * $j)."</td>";
    }
    if ($i != 10) echo "</tr><tr>";
}
echo "</tr></table>";