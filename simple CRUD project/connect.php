<?php
    $con = new mysqli('localhost','root', '', 'biodata');//connecting mysql database

    if(!$con){
        die(mysqli_error($con));
    }
?>