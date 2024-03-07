<?php

$name = "Hello Bhai";               //STRING
$age = 50;                          //INTEGER
$isCnic = true;                     //BOOLEAN
$marks = 80.65;                     //FLOAT

echo "$name";
echo "<br> $age";
echo "<br> $isCnic";
echo "<br> $marks";

// ARITHMETIC OPERATIONS

$a = 20;
$b = 30;
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;

echo "<br> The sum of $a + $b is : " .$c;
echo "<br> The sub of $a - $b is : " .$d;
echo "<br> The mul of $a * $b is : " .$e;
echo "<br> The div of $a / $b is : " .$f;
echo "<br> The mod of $a % $b is : " .$g;

// INCREMENT

$apple = 70;

// POST INCREMENT
echo "<br>" .$apple++;
echo "<br>".$apple;

// Pre Increment
echo "<br>" .++$apple;

// DECREMENT

$banana = 50;

// Post Decrement
echo "<br>" .$banana--;
echo "<br>" .$banana;

// Pre Decrement
echo "<br>" .--$banana;

// INITIAL NUMBER 200
// 195
// 235
// 109
// 204

$number = 200;

// 195
echo "<br> $number";
$number -=5;
echo "<br> $number";

// 235
echo "<br> $number";
$number +=40;
echo "<br> $number";

// 109

echo "<br> $number";
$number -=126;
echo "<br> $number";

// 204

echo "<br> $number";
$number +=95;
echo "<br> $number";

?>