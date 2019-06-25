<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteEdu($id);
if($res){
    echo "<script>alert('Delete Education Successfully.');window.location.href='list-edu.php';</script>";
}
?>