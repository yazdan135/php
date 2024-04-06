<?php
    include("config/one.php");

    $sql = "delete from user where id = 3";
    $result = $conn->query($sql);

    if($result == true){
        echo "<br> Data Updated Successfully";

    }else{
        echo "<br>Data not Updated";
    }
?>