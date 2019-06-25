<?php 
include 'dbconfig/connection.php';
if(isset($_POST['addSubmit'])){
    if(isset($_FILES["serviceLogo"]) && $_FILES["serviceLogo"]["error"] == 0){
        $allowed = array("jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png","jpg" => "image/jpg");
        $filename = $_FILES["serviceLogo"]["name"];
        $filetype = $_FILES["serviceLogo"]["type"];
        $filesize = $_FILES["serviceLogo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype,$allowed)){
            // Check whether file exists before uploading it
      
                move_uploaded_file($_FILES["serviceLogo"]["tmp_name"], "servicelogo/".$filename);
             //   echo "Your file was uploaded successfully.";
       
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["serviceLogo"]["error"];
    }
    
    $serviceName = $_POST['serviceName'];
    $serviceLogo = $filename;
    $serviceDesc = $_POST['editor1'];
    
    $res = $database->createService($serviceName,$serviceLogo,$serviceDesc); 
    if($res){
        echo "<script>alert('Add Services Successfully.');window.location.href='list-service.php';</script>";
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
  <title>Services | Dashboard</title>
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
        <li class="active">Add Services</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
            <form role="form" method='POST' enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="serviceName">Service Name</label>
                  <input type="text" class="form-control" id="serviceName" name='serviceName' placeholder="Enter Service Name">
                </div>
                <div class="form-group">
                  <label for="serviceLogo">Service Logo</label>
                  <input type="file" class="form-control" id="serviceLogo" name='serviceLogo'>
                </div>
                <div class="form-group">
                  <label for="editor1"> Service Description</label>
                  <textarea name="editor1" id="editor1" rows="10" cols="70"></textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name='addSubmit' id='addSubmit' class="btn btn-success"> Submit </button>
                   <button type="reset" name='reset' id='reset' class="btn btn-primary"> Reset </button>
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
