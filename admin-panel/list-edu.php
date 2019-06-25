<?php 
include 'dbconfig/connection.php';
// if(isset($_POST['addSubmit'])){
// $myName = $_POST['myName'];
// $myDesc = $_POST['editor1'];

// $res = $database->createAbout($myName,$myDesc); 
// if($res){
//     echo "Successfully inserted data";
//     }else{
//     echo "failed to insert data";
//     }
//}
$res = $database->readEdu();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>List Education | Dashboard</title>
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
        <li class="active">List Education</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <div class='col-md-12'>
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Education Deatil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Education Name</th>
                  <th>Education Start</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php
                while($row = mysqli_fetch_assoc($res)){ 
                ?>
                
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['eduName']; ?></td>
                    <td><?php echo $row['eduStart']; ?></td>
                    <!-- <td><img style='width:100px;height:50px;' src="servicelogo/<?php echo $row['serviceLogo']; ?>"></td> -->
                    <td><a class='btn btn-primary' href="edit-edu.php?id=<?php echo $row['id']; ?>"><i class='fa fa-fw fa-pencil-square'></i></a>
                    <a class='btn btn-danger' onclick='return myfunction();' href="delete-edu.php?id=<?php echo $row['id']; ?>"><i class='fa fa-fw fa-trash'></i></a>
                </td>
                    </tr>
                <?php } ?>
                
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Education Name</th>
                  <th>Education Start</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
function myfunction() {
  var retVal = confirm("Do you want to continue ?");
    if( retVal == true ){
      return true;
    }else{
      return false;
    }
}
</script>
