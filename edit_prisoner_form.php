<?php include "common_pages/conn.php";?>
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
    <?php
    $query = "SELECT * FROM prisoners";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $ID = $row['ID'];
      $prisonerFullName = $row['fullName'];
      $prisonerStatue = $row['statue'];
      $prisonerReason = $row['reason'];
    ?>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit prisoner information - <?php echo $prisonerFullName; ?></h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="edit_prisoner_conn.php" method="post" >
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" required class="form-control" name="fullName" id="name<?php echo $ID; ?>" placeholder="Enter name" value="<?php echo $prisonerFullName; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="text" class="form-control" name="statue" required id="status<?php echo $ID; ?>" placeholder="exapmle: arrested, released, escaped" value="<?php echo $prisonerStatue; ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Reason</label>
            <input type="text" class="form-control" name="reason" id="reason<?php echo $ID; ?>" placeholder="reason of arrest" value="<?php echo $prisonerReason; ?>">
          </div>
          <input type="hidden" name="ID" value="<?php echo $ID; ?>">
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
    <?php } ?>
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
