<?php

$fruits = ["apple", "mango", "orange", "pine apple"];
echo "<br> ".$fruits[1];

// Push Method
array_push($fruits , "Hello");

// For Each (For printing all arrays in fruits)

foreach($fruits as $key){
    echo "<br> $key";
}

// ASSOCIATE ARRAY      ("=>" is fed arrow function)

$employee = [
    "Alex" => "Web Dev",
    "Henry" => "App Dev",
    "Rossy" => "SQA" 
];

foreach($employee as $key => $value){
    echo "<br> $key : $value";
}

?>