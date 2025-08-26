<?php
include '../connection.php';
global $con;
    $course_id=$_POST['id'];

    $delete="DELETE FROM `course` WHERE `id`='$course_id'";
    if($con->query($delete)){
        echo 'Success';
    }
