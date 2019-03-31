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
$num = 1;

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
echo "Время года которое вы выбрали это: <b>$result</b>";

echo "<br><br>";

//Второе задание
echo "<b>Задание 2:</b><br>";

//Обьявляем переменную $day
$day = 12;

//Первый вариант
/*if ($day >=1 && $day < 11) {
    echo "Данное число \"$day\" попадает в первую декаду месяца";
} elseif ($day >= 11 && $day < 21) {
    echo "Данное число \"$day\" попадает в вторую декаду месяца";
} elseif ($day >= 21 && $day <= 30) {
    echo "Данное число \"$day\" попадает в третью декаду месяца";
} else {
    echo "Данный день \"$day\" не входит не в одну из трех декад месяца";
}*/

//Второй вариант
if ($day >=1 && $day <= 30) {
    if ($day < 11) {
        echo "Данное число \"$day\" попадает в первую декаду месяца";
    } elseif ($day < 21) {
        echo "Данное число \"$day\" попадает в третью декаду месяца";
    } else {
        echo "Данное число \"$day\" попадает в третью декаду месяца";
    }
} else {
    echo "Данный день \"$day\" не входит не в одну из трех декад месяца";
}

echo "<br><br>";

//Третье задание
echo "<b>Задание 3:</b><br>";

//Обьявляем переменную $day
$month = 5;

switch ($month) {
    case 1:
    case 2:
    case 12:
        echo "Данный месяц \"$month\" является зимним";
        break;
    case 3:
    case 4:
    case 5:
    echo "Данный месяц \"$month\" является весенним";
        break;
    case 6:
    case 7:
    case 8:
        echo "Данный месяц \"$month\" является летним";
        break;
    case 9:
    case 10:
    case 11:
        echo "Данный месяц \"$month\" является осенним";
        break;
    default:
        echo "Задан не корректный номер \"$month\" месяца.";
}
?>
</body>
</html>