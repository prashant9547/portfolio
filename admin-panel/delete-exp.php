<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteExp($id);
if($res){
    echo "<script>alert('Delete Experiance Successfully.');window.location.href='list-exp.php';</script>";
}
?>