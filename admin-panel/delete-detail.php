<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteDetail($id);
if($res){
    echo "<script>alert('Delete Detail Successfully.');window.location.href='list-detail.php';</script>";
}
?>