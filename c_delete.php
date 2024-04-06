<?php
       include("config/one.php");

       $id = $_GET['id'];
       $sql = "delete from user where id = $id";
       $result = mysqli_query($conn, $sql);

       if($result == true){
           echo "<br> Data deleted Successfully";
       }
       else{
           echo "<br>Data not deleted";
       }

?>