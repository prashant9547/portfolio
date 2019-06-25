<?php 
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="root";
$dbname ="phpmyadmin";

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{
    die("Connection Is Not Ready".mysqli_error());
}
$u_id = $_GET['u_id'];

$sql = "DELETE FROM info WHERE u_id = '".$u_id."'";
if(!mysqli_query($con,$sql))
{
    die('Record Is Not Delete Successfully'.mysqli_error($con));
}
else
{
    header('location:ex10.php');
}
mysqli_close($con);
?>