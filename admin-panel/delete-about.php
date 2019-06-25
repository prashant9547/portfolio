<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteAbout($id);
if($res){
    echo "<script>alert('Delete About Me Successfully.');window.location.href='list-about.php';</script>";
}
?>