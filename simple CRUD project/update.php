<?php
include "connect.php";
$id = $_GET['updateid']; 
     
     if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email= $_POST["email"];
        $mobile=  $_POST["mobile"];
        $age= $_POST["age"];
        $password=$_POST["password"];

    $sql ="update biodata set name = '$name', email='$email', mobile='$mobile',password='$password' WHERE id = '$id'";
    $result = mysqli_query($con,$sql);
    if($result){                
         echo "Updated successfully";
         header("location:screen.php");
    }else{
         die(mysqli_error($con));
         }
}

?>

<html>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title> Bio Database </title>    
<body>
<div class=" container my-5">
    <form method="post" autocomplete="off">
        <div class="form-group">
            <label>Name</label>
            <input type="text" 
            class="form-control"
            placeholder="Enter Your Name" name="name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" 
            class="form-control"
            placeholder="Enter Your Email" name="email">
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="text" 
            class="form-control"
            placeholder="Enter Your Mobile Number" name="mobile">
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="text" 
            class="form-control"
            placeholder="Enter Your Age" name="age">
        </div>
  
        <div class="form-group">
            <label>Password</label>
            <input type="text" 
            class="form-control"
            placeholder="Enter Your Password" name="password">
        </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>

