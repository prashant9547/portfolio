<?php 
include 'dbconfig/connection.php';
if(isset($_POST['addSubmit'])){
    $fb = $_POST['fb'];
    $gmail = $_POST['gmail'];
    $in = $_POST['in'];
    $yt = $_POST['yt'];
    $tw = $_POST['tw'];
    
    $res = $database->createSocial($fb,$gmail,$in,$yt,$tw); 
    if($res){
        echo "<script>alert('Add Social Link Successfully.');window.location.href='list-social.php';</script>";
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
  <title>Social Links| Dashboard</title>
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
        <li class="active">Add Social Links</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Socila links</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
            <form role="form" method='POST' enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="fb">Facebook</label>
                  <input type="url" class="form-control" id="fb" name='fb' placeholder="Enter Facebook link">
                </div>
                <div class="form-group">
                  <label for="gmail">Google+</label>
                  <input type="url" class="form-control" id="gmail" name='gmail' placeholder="Enter Google+ Link">
                </div>
                <div class="form-group">
                  <label for="in">Linkedin</label>
                  <input type="url" class="form-control" id="in" name='in' placeholder="Enter Linkedin Link">
                </div>
                <div class="form-group">
                  <label for="yt">Youtube</label>
                  <input type="url" class="form-control" id="yt" name='yt' placeholder="Enter Youtube Link">
                </div>
                <div class="form-group">
                  <label for="tw">Twiter</label>
                  <input type="url" class="form-control" id="tw" name='tw' placeholder="Enter Twitter Link">
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
