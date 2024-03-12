<?php

// LOOPS
// For Loop

for($i=0; $i<=10; $i++){
    echo "<br> This is for Loop" .$i;
}

// Table

for($q=1; $q<=10; $q++){
    echo "<br> 5 x $q =" .$q*5;
}

// Table with num

$tableNum = 9;
for($w=1; $w<=10; $w++){
    echo "<br> $tableNum x $w = " .$tableNum*$w;
}

// While Loop

$number = 80;
while($number<=85){
    echo "<br> This is while loop $number";
    $number++;
}

// Do While Loop

$apple = 30;
do{
    echo "<br> This is do while loop $apple";
    $apple++;
}
while($apple<=33)

?>