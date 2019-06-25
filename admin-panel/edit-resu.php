<?php 
$id = $_GET['id'];
include 'dbconfig/connection.php';

$res = $database->readResu($id);
$row = mysqli_fetch_assoc($res);


if(isset($_POST['addUpdate'])){
// $myName = $_POST['myName'];
// $myDesc = $_POST['editor1'];
if(isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0){
    $allowed = array("pdf" => "application/pdf","jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","jpg" => "image/jpg");
    $filename = $_FILES["resume"]["name"];
    $filetype = $_FILES["resume"]["type"];
    $filesize = $_FILES["resume"]["size"];

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

    // Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    // Verify MYME type of the file
    if(in_array($filetype,$allowed)){
        // Check whether file exists before uploading it
  
            move_uploaded_file($_FILES["resume"]["tmp_name"], "resume/".$filename);
         //   echo "Your file was uploaded successfully.";
   
    } else{
        echo "Error: There was a problem uploading your file. Please try again."; 
    }
} else{
    $filename = $row['resume'];
}

$resume = $filename;

$res = $database->updateResu($resume,$id);
if($res){
    echo "<script>alert('Update Your Resume Successfully.');window.location.href='list-resu.php';</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Edit Resume| Dashboard</title>
  <?php 
  include 'include/cssfile.php';
  ?>
  <!-- Tell the browser to be responsive to screen width -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
  include 'include/headerfile.php';
  ?>
  <?php
  include 'include/sidebarfile.php'; 
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Resume</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Resume</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method='POST' enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="resume">Resume File</label>
                  <input type="file" class="form-control" id="resume" name='resume'>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name='addUpdate' id='addUpdate' class="btn btn-success"> Update </button>
              </div>
            </form>
          </div>
          <!-- small box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  include 'include/footerfile.php';
  ?>
  <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
