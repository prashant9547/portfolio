<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteService($id);
if($res){
    echo "<script>alert('Delete Service Successfully.');window.location.href='list-service.php';</script>";
}
?>