<?php 
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <title>biodata screen(CRUD operation)</title>
</head>
<body>
   <div class="container">
    <button class="btn btn-primary my-5 "name="add"> <a class="text-light"href="database.php">Add User</a></button>
   </div> 
   <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Age</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     $sql = "Select * from `biodata`";
     $result = mysqli_query($con,$sql);
     if($result){
        while($row = mysqli_fetch_assoc($result)){//fetching the associative array;
            $id = $row["id"]; 
            $name = $row["name"];
            $email = $row["email"];
            $mobile= $row["mobile"];
            $age= $row["age"];
            $password= $row["password"];
            echo "<tr>
            <th scope='row'>".$id."</th>
            <td>".$name."</td>
            <td>".$email."</td>
            <td>".$mobile."</td>
            <td>".$age."</td>
            <td>".$password."</td>
            <td>
            <button class='btn btn-primary'><a class='text-light' href='update.php ?updateid=".$id."'>Update</a></button>
            <button class='btn btn-danger '><a class='text-light' href='delete.php? 
            deleteid=".$id."'>Delete</a></button>
            </td>
            </tr>";
        }
     }
    ?>
  </tbody>
</table>
</body>
</html>