<?php 
include '../connection.php';
global $con;
    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $time=$_POST['time'];
    $image=$_POST['image'];
    $des=$_POST['des'];
    $insert="INSERT INTO `course`(`course_name`, `price`, `time`, `image`, `description`, `admin_id`)
     VALUES ('$name','$price','$time','$image','$des','$user_id')";
     $exc=$con->query($insert);
   

    $select_id="SELECT `id` FROM `course` ORDER BY `id` DESC LIMIT 1";
    $rs=$con->query($select_id);
    $id=$rs->fetch_assoc()['id'];
    echo $id;
?>