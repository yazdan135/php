<!-- Update in database (admin php) -->

<?php
    include("config/one.php");

    $sql = "Update User set Name = 'Shapatar Man' where id = 2";
    $result =$conn->query($sql);

    if($result == true){
        echo "<br> Data Updated Successfully";

    }else{
        echo "<br>Data not Updated";
    }
?>