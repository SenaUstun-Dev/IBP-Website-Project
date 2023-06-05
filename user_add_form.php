<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
  $fullName = "Guest User";
  $email = "guest@gmail.com";
  $yetki = "0";
}

else{
$fullName = $_SESSION["fullName"];
$email = $_SESSION["email"];
$yetki = $_SESSION["yetki"];
$login = $_SESSION["login"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $yetki = "2";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php include "common_pages/title.php";?>
  
  <!----------------------------- Google Font: Source Sans Pro ----------------------------->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


  <!----------------------------- Font Awesome ----------------------------->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">


  <!----------------------------- Theme style ----------------------------->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<!----------------------------- Site wrapper ----------------------------->
<div class="wrapper">


<!----------------------------- Navbar ----------------------------->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!----------------------------- Left navbar links ----------------------------->
    <?php include "common_pages/left_navbar.php";?>

    <!----------------------------- Right navbar links ----------------------------->
    <?php include "common_pages/right_navbar.php";?>

  </nav>
  <!----------------------------- /.navbar ----------------------------->



  <!----------------------------- Main Sidebar Container ----------------------------->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   
   <!----------------------------- Brand Logo ----------------------------->  
    <?php include "common_pages/logo.php";?>

    <!----------------------------- Sidebar ----------------------------->
    <?php include "common_pages/sidebar.php";?> 

    <!----------------------------- /.sidebar ----------------------------->
  </aside>



  <!----------------------------- Content Wrapper. Contains page content ----------------------------->
  <div class="content-wrapper">

  <!----------------------------- Content Header (Page header) ----------------------------->
    <?php include "common_pages/content_header.php";?>

    <!----------------------------- Main content ----------------------------->
    <!-- form start -->
    <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="user_add_conn.php" method="post">
        <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" required class="form-control" name="fullName" id="uname" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" class="form-control" name="email" required id="useremail" placeholder="exmp@example.com">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" name="password" id="reason" placeholder="password">
        </div>
        <input type="hidden" name="yetki" value="2">  <!-- setting yetki 2 no matter what (normal user yetki) -->
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
    <!-- /.card -->

    <!----------------------------- /.content ----------------------------->
  </div>
  <!----------------------------- /.content-wrapper ----------------------------->


  <footer class="main-footer">
    <?php include "common_pages/copyright.php";?>
  </footer>


  <!----------------------------- Control Sidebar ----------------------------->
  <aside class="control-sidebar control-sidebar-dark">

    <!----------------------------- Control sidebar content goes here ----------------------------->
  </aside>
  <!----------------------------- /.control-sidebar ----------------------------->
</div>

<!----------------------------- ./wrapper ----------------------------->


<!----------------------------- jQuery ----------------------------->
<script src="plugins/jquery/jquery.min.js"></script>
<!----------------------------- Bootstrap 4 ----------------------------->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!----------------------------- AdminLTE App ----------------------------->
<script src="dist/js/adminlte.min.js"></script>
<!----------------------------- AdminLTE for demo purposes ----------------------------->
<script src="dist/js/demo.js"></script>
</body>
</html>
