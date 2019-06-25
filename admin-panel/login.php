<?php
include('dbconfig/connection.php');
//echo $profile = 'prashant.jpg';
if(isset($_POST['login']))
{
    // include config file 

    $profile = 'prashant.jpg';
    // Frist Store Email and Password Into This Variable and Encrypttion  
    // $userName = 'prashantradadiya7@gmail.com';
    $password = md5($_POST['password']); 
    // $password = md5($password);

    $res = $database->login($password,$profile);
    
    
}
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 May 2018 15:49:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <?php 
  include 'include/cssfile.php';
  ?>
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Prashant Radadiya</div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="dist/img/user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method='POST' enctype='multipart/form-data'>
      <div class="input-group">
        <input type="password" name='password' id='password' class="form-control" placeholder="password">

        <div class="input-group-btn">
          <button type="submit" name='login' id='login' class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="#">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2016 <b><a href="#" class="text-black">Almsaeed Studio</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
