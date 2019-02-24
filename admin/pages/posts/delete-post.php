<?php
/**
 * Created by PhpStorm.
 * User: Himanshu
 * Date: 12/28/2018
 * Time: 1:12 PM
 */
include_once ("../includes/connection.php");
if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $query = "DELETE FROM posts WHERE post_id = $post_id";
    mysqli_query($connection, $query);
    if(mysqli_errno($connection)){
        die(mysqli_error($connection));
    }
    header("Location: posts.php");
}