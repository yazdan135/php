<?php
       include("config/one.php");

       $sql = "select * from user";
       $result = mysqli_query($conn , $sql);
 ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <table class="table table-bordered text-center">
    <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                 <td>". $row['id']. "</td>
                 <td>". $row['name']. "</td>
                 <td>". $row['email']. "</td>
                 <td>". $row['password']. "</td>
                 <td><a href='c_update.php?id=".$row['id']."'class='btn btn-success'>Edit</a></td>
                 <td><a href='c_delete.php?id=".$row['id']."'class='btn btn-Danger'>Delete</a></td>
                 </tr>";
            }
           ?>
    </table>
</div>