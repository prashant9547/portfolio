<?php
include 'dbconfig/connection.php';
$id = $_GET['id'];
$res = $database->deleteProfile($id);
if($res){
    echo "<script>alert('Delete profile Successfully.');window.location.href='list-profile.php';</script>";
}
?>