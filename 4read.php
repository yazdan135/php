<!-- fetch data on new file -->

<?php
include("config/one.php");

$sql = "select * from user";
$result = $conn->query($sql);

if ($result == true) {
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}

if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
}
?>