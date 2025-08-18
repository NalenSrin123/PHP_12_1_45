<?php 
    function moveFile($name){
        $image=date('y_m_d_h_i_s').'_'.$_FILES[$name]['name'];
        $tmp_name=$_FILES[$name]['tmp_name'];
        $path='upload/'.$image;
        move_uploaded_file($tmp_name,$path);
        return $image;
    }
?>