<?php 
$id = $_GET['id'];
include 'dbconfig/connection.php';

$res = $database->readExp($id);
$row = mysqli_fetch_assoc($res);


if(isset($_POST['addUpdate'])){
// $myName = $_POST['myName'];
// $myDesc = $_POST['editor1'];

$cName = $_POST['cName'];
    $pName = $_POST['pName'];
    $sDate = $_POST['sDate'];
    $eDate = $_POST['eDate'];
    $cDesc = $_POST['editor1'];

$res = $database->updateExp($cName,$pName,$sDate,$eDate,$cDesc,$id);
if($res){
    echo "<script>alert('Update Your Experiance Successfully.');window.location.href='list-exp.php';</script>";
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
  <title>Edit Experiance| Dashboard</title>
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
        <li class="active">Edit Experiance </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Experiance</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
            <form role="form" method='POST' enctype='multipart/form-data'>
              <div class="box-body">
              <div class="form-group">
                  <label for="cName">Company Name</label>
                  <input type="text" class="form-control" value='<?php echo $row['comName']; ?>' id="cName" name='cName' placeholder="Enter Company Name">
                </div>
                <div class="form-group">
                  <label for="pName">Company Name</label>
                  <input type="text" value='<?php echo $row['comDeg']; ?>' class="form-control" id="pName" name='pName' placeholder="Enter Post Name">
                </div>
                <div class="form-group">
                  <label for="sDate">Start Date</label>
                  <input type="date" class="form-control" value='<?php echo $row['comStart']; ?>' id="sDate" name='sDate'>
                </div>
                <div class="form-group">
                  <label for="eDate">End Date</label>
                  <input type="date" class="form-control" value='<?php echo $row['comEnd']; ?>' id="eDate" name='eDate'>
                </div>
                <div class="form-group">
                  <label for="editor1"> Company Description</label>
                  <textarea name="editor1" id="editor1" rows="10" cols="70"><?php echo $row['comDesc']; ?></textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
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
