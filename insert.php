<?php 
include 'connection.php';
date_default_timezone_set('Asia/Phnom_Penh');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];
        $btn=$_POST['btn'];
        if(empty($_FILES['image']['name'])){
            $image=$_POST['old_image'];
        }else{
            $image=date('y_m_d_h_i_s').'_'.$_FILES['image']['name'];
            // $image=rand(1,10000).'_'.$_FILES['image']['name'];
            $tmp_name=$_FILES['image']['tmp_name'];
            $path="./uploads/".$image;
            move_uploaded_file($tmp_name,$path);
        }
        if($btn=='save'){
            $stm="INSERT INTO `tb_products`(`name`, `price`, `stock`, `image`) 
            VALUES ('$name','$price','$stock','$image')";
        }else{
            $code=$_POST['code'];
            $update_at=date('y-m-d H:i:s');
            $stm="UPDATE `tb_products` SET`name`='$name',`price`='$price',
            `stock`='$stock',`image`='$image',`update_at`='$update_at' WHERE `code`='$code'";
        }
        
        global $con;
        $exe=$con->query($stm);
        if($exe){
            echo '<script>window.location.href="index.php"</script>';
        }
    }
?>