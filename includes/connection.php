<?php
/**
 * Created by PhpStorm.
 * User: Himanshu
 * Date: 12/26/2018
 * Time: 11:22 AM
 */
include_once ("config.php");

$connection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);

if($connection){
//    echo "Connection Established Successfully";
}else{
    die(mysqli_connect_error($connection));
}