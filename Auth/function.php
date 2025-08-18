<?php 
session_start();
include '../moveFile.php';
include '../connection.php';
    // register

    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $profile=moveFile('profile');
        global $con;
        $insert="INSERT INTO `users`(`username`, `email`, `password`, `profile`) 
        VALUES ('$username','$email','$password','$profile')";
        $rs=$con->query($insert);
        if($rs){
            header('location: login.php');
        }
    }


    // login
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $select_login="SELECT `email` ,`is_admin` FROM `users` WHERE `email`='$email' AND `password`='$password'";
        global $con;
        $exe=$con->query($select_login);
        if($exe->num_rows>0){
            $user=$exe->fetch_assoc();
            $_SESSION['login']=$email;
            $_SESSION['role']=$user['is_admin'];
            if($_SESSION['role']==1){
                header('location: ../Admin/dashboard.php');
            }else{
                header('location: ../user/index.php');
            }
        }
    }
?>