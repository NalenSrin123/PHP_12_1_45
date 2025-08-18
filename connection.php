<?php 
    try{
        $con=new mysqli('localhost','root','','db_php_12_ajax');
    }catch(Exception $e){
        echo 'Connection failed :'.$e;
    }
?>