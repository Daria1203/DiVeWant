<form action="./result.php" method="POST">
    <input placeholder="Login..." type="text" name="login">
    <input placeholder="Password..." type="password" name="password">
    <input type="submit" value="Submit">
</form>





<!DOCTYPE html>
<html>
<body>

<u>Задача 1:</u>
<div>
<?php
$pr = 'PHP';
$pr2 = 'Java Script';
echo "Виды языков программирования которые мы изучили это: </br> $pr, </br> $pr2!</br>";

$veb = 'HTML';
$veb2 = 'CSS';
$veb3 = 'DOM';
$veb4 = 'GIT';
echo " </br> Виды изученых веб-технологий: $veb, $veb2, $veb3, $veb4 и другие.";
?>
</div>
</br>

<u>Задача 2:</u>
<div>
<?php

$students[1] = "Oleg Markov"; 
$students[2] = "Maria Amirovma"; 
$students[3] = "Natalia Andreeva";
$students[4] = "Olga Nikola";
$students[5] = "Miroslava Karpova";

foreach($students as $key => $value) {
   echo "[{$key}] => {$value} <br/>";
}
?>
</div>
<br>

<u>Задача 3:</u>
<div>
<?php
$x = '';
$y = '';
echo (10/2)."\n";
echo (40*20)."\n";
echo (5 % 3)."\n"; 
echo (2 ** 3)."\n"; 
echo (-1)."\n"; 
echo (6 + 14)."\n"; 
?>
</div>
<br>

<u>Задача 4:</u>
<div>
<?php
$x = 20;
$y = 10;
 
list($y, $x) = array($x, $y);
 
var_dump($x, $y);
?>
</div>
<br>

<u>Задача 5:</u>
<div>
<?php
$x = 10;
if(($x % 8) == 0){
    echo "четное";
}else{
    echo "не четное";
}
?>
</div>
<br>

<u>Задача 6:</u>

<?php
$article = [
    'title' => 'Дом у моря',
    'text' => 'Котеджный поселок с.Комарово.',
    'registr' => 'Ваш номер забронирован',
    'data' => 'Ждем вас 13 декабря в 12:00',
    'author' => [
        'first_name' => 'С уважением,',
        'last_name' => 'администрация отеля "Дом у моря".'
    ]
];
?>
<head>
    <title><?= $article['title'] ?></title>
</head>
<h1><?= $article['title'] ?></h1>
<u><?= $article['text'] ?></u>
<h2><?= $article['registr'] ?></h2>
<u><?= $article['data'] ?></u>
<p><?= $article['author']['first_name'] . ' ' . $article['author']['last_name'] ?></p>
<br>


<u>Задача 7:</u>
<div>
<?php
$i = 245;
$i1 = 287;

if ($i % 2 !== 0) {$i=$i+1;}

while ($i <= $i1) {
    $array1 [] = $i;
    $i = $i + 2;
    }

foreach ($array1 as $i) {
    echo $i;
    echo '<br>';
};
?>
</div>

</body>
</html>
