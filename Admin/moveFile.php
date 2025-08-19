<?php 
    $image=date('y_m_d_h_i_s').'_'.$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $path='../upload/'.$image;
    move_uploaded_file($tmp_name,$path);
    echo $image;
?>