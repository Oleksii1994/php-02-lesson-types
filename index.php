// всі методи масивів https://www.php.net/manual/ru/ref.array.php


<?php
echo "<br>";



//String 

$name = "Oleksii"; //string
var_dump($name); //var_dump() повертає тип і значення
echo "<br>";

$name2 = "Олексій";
var_dump($name2);
echo "<br>";


//Integer

$age = 10; //integer
$ageString = '10';
var_dump($age);
echo "<br>";

echo $ageString + $age; // 20
echo "<br>";

//Float(double)

$height = 1.74; //  float/double;
var_dump($height);
echo "<br>";

echo gettype(intval($height)); //intval-->1 (int)
echo "<br>";

echo (gettype($height)); //double
echo "<br>";

settype($height, "int"); //(аналог intval()) або можемо задати інший тип 
echo (gettype($height)); //-->integer 1 
echo "<br>";


//Boolean

$bool = true; //boolean

echo is_int($bool); //нічого не виведе тому що false;
echo is_string($name); //виведе 1 як true
echo "<br>";

echo is_bool($bool); // 1
echo "<br>";

var_dump(isset($bool)); //true  isset() повертає буль 
echo "<br>";


//Null

$null = null; //зарезервували ячєйку але там пусто як і в js

var_dump(isset($null)); //тут поверне false оскільки null;
echo "<br>";


//Array

$hobbies = ["riding", "sport", "playing"];
$args = ["Oleksii", 29, 1.74, true]; //тут ключем буде індекс починаючи з 0
$args2 = array(
  "name" => $name,
  "age" => $age,
  "isMale" => true,
  "hobbies" => $hobbies
); //більш старий синтаксис, одразу можна присвоювати ключ=>значення як і в квадратний дужках



var_dump($args2);
echo "<br>";

echo count($hobbies); //або sizeof()
echo "<br>";

echo $hobbies[1]; //виводимо занчення за індексом
echo "<br>";

echo $args2["name"];  //виводимо значення за ключем
echo "<br>";

array_push($hobbies, "swimming", "jumping");
//array_unshift() щоб вставити наперед 
print_r($hobbies);
echo "<br>";

// array_shift($hobbies);
// print_r($hobbies);

// array_pop($hobbies);
// print_r($hobbies);          методи як в js +-

asort($hobbies); //сортування
//arsort() сортування в зворотньому напрямку
print_r($hobbies);
echo "<br>";


$newArrayMerged = array_merge($args, $hobbies); //обʼєднання массивів 
$reversed = array_reverse($newArrayMerged); // перевертає з заду наперед
print_r($reversed);

//немає ланцюжків методів, якщо метод щось повертає, треба записати в окрему зміну

$friends = "Nastya, Masha, Max";
$arrayFriends = explode(', ', $friends); // конвертація з рядка в масив (аналог метода 'сплит' в js)
print_r($arrayFriends);
echo "<br>";

echo $arrayFriends[2];
echo "<br>";


$stringFriendsFromArray = implode(', ', $arrayFriends); //анaлог  join
echo $stringFriendsFromArray;
echo "<br>";


//Object (більше в розділі ООП)

$user = new stdClass; //object

$user->name = "Oleksii";
$user->age = 29;
print_r($user);
echo "<br>";


//Resource

$file = fopen('test.txt', 'r'); //r - read   //resource
var_dump($file);
