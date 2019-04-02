<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork5_8</title>
</head>
<body>
<h2>switch-case и if/else.</h2>
<p>Все задачи нужно решать через switch-case и через if/else. При желании и через массив.</p>
<ul style="list-style-type: none;">
    <li>1) Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в
        переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее.</li>
    <li>2) В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает
        это число (в первую, вторую или третью).</li>
    <li>3) В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает
        этот месяц (зима, лето, весна, осень).</li>
</ul>
<?php
//Первое задание
echo "<b>Задание 1:</b><br>";

//Обьявляем переменную $num
$num = 0;

echo "<div style='font-size: 13px;'><b>Результат работы с использованием Switch:</b></div>";
switch ($num) {
    case 1:
        $result = "Зима";
        break;
    case 2:
        $result = "Весна";
        break;
    case 3:
        $result = "Лето";
        break;
    case 4:
        $result = "Осень";
        break;
    default:
        $result = "выбранное Вами время года несуществует.";
}
echo "<div style='font-size: 12px;'>Время года которое вы выбрали это: <b>$result</b></div>";
unset($result);
echo "<br><br>";

echo "<div style='font-size: 13px;'><b>Результат работы с использованием if/else:</b></div>";
if ($num == 1) {
    $result = "Зима";
} elseif ($num == 2) {
    $result = "Весна";
} elseif ($num == 3) {
    $result = "Лето";
} elseif ($num == 4) {
    $result = "Осень";
} else {
    $result = "выбранное Вами время года несуществует.";
}
echo "<div style='font-size: 12px;'>Время года которое вы выбрали это: <b>$result</b></div>";
unset($result);
echo "<br><br>";

//Второе задание
echo "<b>Задание 2:</b><br>";

//Обьявляем переменную $day
$day = 12;

echo "<div style='font-size: 13px;'><b>Результат работы с использованием if/else:</b></div>";
//Первый вариант
/*if ($day >=1 && $day < 11) {
    echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в первую декаду месяца</div>";
} elseif ($day >= 11 && $day < 21) {
    echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в вторую декаду месяца</div>";
} elseif ($day >= 21 && $day <= 30) {
    echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в третью декаду месяца</div>";
} else {
    echo "<div style='font-size: 12px;'>Данный день \"$day\" не входит не в одну из трех декад месяца</div>";
}*/

//Второй вариант
if ($day >=1 && $day <= 30) {
    if ($day < 11) {
        echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в первую декаду месяца</div>";
    } elseif ($day < 21) {
        echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в вторую декаду месяца</div>";
    } else {
        echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в третью декаду месяца</div>";
    }
} else {
    echo "<div style='font-size: 12px;'>Данный день \"$day\" не входит не в одну из трех декад месяца</div>";
}
echo "<br><br>";

echo "<div style='font-size: 13px;'><b>Результат работы с использованием Switch:</b></div>";
switch ($day) {
    case ($day >= 1 && $day <= 10):
        echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в первую декаду месяца</div>";
        break;
    case ($day >= 11 && $day <= 20):
        echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в вторую декаду месяца</div>";
        break;
    case ($day >= 21 && $day <= 30):
        echo "<div style='font-size: 12px;'>Данное число \"$day\" попадает в третью декаду месяца</div>";
        break;
    default:
        echo "<div style='font-size: 12px;'>Данный день \"$day\" не входит не в одну из трех декад месяца</div>";

}
echo "<br><br>";

//Третье задание
echo "<b>Задание 3:</b><br>";

//Обьявляем переменную $day
$month = 8;

echo "<div style='font-size: 13px;'><b>Результат работы с использованием if/else:</b></div>";
if (($month >= 1 && $month <= 2) || $month == 12) {
    echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является зимним</div>";
} elseif ($month >=3 && $month <= 5) {
    echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является весенним</div>";
} elseif ($month >= 6 && $month <= 8) {
    echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является летним</div>";
} elseif ($month >= 9 && $month <= 11) {
    echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является осенним</div>";
} else {
    echo "<div style='font-size: 12px;'>Задан не корректный номер \"$month\" месяца.</div>";
}
echo "<br><br>";

echo "<div style='font-size: 13px;'><b>Результат работы с использованием Switch:</b></div>";
switch ($month) {
    case 1:
    case 2:
    case 12:
        echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является зимним</div>";
        break;
    case 3:
    case 4:
    case 5:
        echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является весенним</div>";
        break;
    case 6:
    case 7:
    case 8:
        echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является летним</div>";
        break;
    case 9:
    case 10:
    case 11:
        echo "<div style='font-size: 12px;'>Данный месяц \"$month\" является осенним</div>";
        break;
    default:
        echo "<div style='font-size: 12px;'>Задан не корректный номер \"$month\" месяца.</div>";
}
?>
</body>
</html>