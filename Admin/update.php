<?php 
date_default_timezone_set('Asia/Phnom_Penh');
    include '../connection.php';
    global $con;
    $user_id=$_POST['user_id'];
    $course_id=$_POST['course_id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $time=$_POST['time'];
    $image=$_POST['image'];
    $des=$_POST['des'];
    $update_at=date('y-m-d H:i:s');
    $stm="UPDATE `course` SET `course_name`='$name',`price`='$price',
    `time`='$time',`image`='$image',`description`='$des',`update_at`='$update_at',`admin_id`='$user_id' WHERE `id`='$course_id'";
    $exe=$con->query($stm);
    if($exe){
        echo 'Success';
    }