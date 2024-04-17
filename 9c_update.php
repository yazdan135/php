<?php
       include("config/one.php");

       $id = $_GET['id'];
       $sql = "update user set name = 'jack' where id = $id";
       $result = mysqli_query($conn, $sql);

       if($result == true){
           echo "<br> Data Updated Successfully";
       }
       else{
           echo "<br>Data not Updated";
       }

?>