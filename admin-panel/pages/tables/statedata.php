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
else
{
  echo "connection is readdy";
}
if(isset($_POST['submit']))
{
   echo $sql = "INSERT INTO state1(state,c_id) VALUES('".$_POST['sname']."','".$_POST['country']."')";

    if(!mysqli_query($con,$sql))
    {
        die("Data Is Not Insert Into DataBase".mysqli_error($con));
    }
    else
    {
        alert("Data Is Not Insert");
    }
}
?>

<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Modals</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

 
  <!-- Google Font -->
  <link rel="stylesheet" href="../../../../../fonts.googleapis.com/css5518.css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Modals</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">State Detail</h3>
            </div>
            <div class="box-body">
           
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Add Sate
              </button>
          </div>
        </div>
      </div>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sate Detail</h4>
              </div>
              <div class="modal-body">
              <form  name="f1" id="f1" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
              <label>Select Country</label>
	                                <select class="form-control" name="country" id="country">
	                                    <option value="0">Select Country</option>	
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
                                                else
                                                {
                                                  echo "Connection Is Ready To Use";
                                                }

				                                $sql = "SELECT * FROM country1 ORDER BY country";
				                                $result = mysqli_query($con,$sql);
                
                                                while($row = mysqli_fetch_array($result))
                                                {
					                                echo "<option value='".$row['c_id']."'>".$row['country']."</option>";
				                                }
			                                ?>
                  </select>
            </div>
                <div class="form-group">
                  <label for="uname"> Add State Name :</label>
                  <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter State Name" required/>
                </div>

              <button class="btn btn-success" name="submit" id="submit"> Save </button>
			  <button type="reset" name="reset" id="reset" class="btn btn-default"> Reset </button>
              </form>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button"class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
<script>