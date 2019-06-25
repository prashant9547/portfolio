<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteResu($id);
if($res){
    echo "<script>alert('Delete Resume Successfully.');window.location.href='list-resu.php';</script>";
}
?>