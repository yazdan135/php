<?php

$age = 20;
$isCnic = true;
if($age>=18){
    echo "<br> You can drive a car";
    if($isCnic == true){
        echo "<br> you can take my car";
    }
    else{
        echo "<br> You should purchase your own car";
    }
}
else{
    echo "<br> you can't drive a car";
}

// Even and Odd number (Loop with Conditional Statement)

for($i=1; $i<=20; $i++){
    if($i%2==0){
        echo "<br> Your number is even $i";
    }
    else{
        echo "<br> Your number is odd $i";
    }
}

?>