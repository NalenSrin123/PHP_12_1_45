<?php 
include "connection.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    global $con;
    $code=$_POST['delete_id'];
    $delete="DELETE FROM `tb_products` WHERE `code`='$code'";
    $exe=$con->query($delete);
    if($exe){
        echo '<script>window.location.href="index.php"</script>';
    }
}