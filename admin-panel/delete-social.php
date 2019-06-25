<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteSocial($id);
if($res){
    echo "<script>alert('Delete Social Links Successfully.');window.location.href='list-social.php';</script>";

}
?>