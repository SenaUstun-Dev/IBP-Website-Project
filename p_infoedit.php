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
$login = $_SESSION["login"];
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
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Prisoner Info </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>

        <div class="card-body">
          You can edit the prisoner information table here.
          you can delete everything about them entirely, add a new prisoner or change any information of an existing prisoner.<br><br>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
        
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    
      <!--the prisoner tabel-->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Prisoner information edit</h3> <br>
                <a href="p_add_form.php">+ Add Prisoner</a>
                <a style="padding: 10px;" href="edit_prisoner_form.php">Edit Prisoner</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                  </thead>
                  <tbody>


                  <?php
              $query = "SELECT * FROM prisoners";
              $result = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['fullName']."</td>";
                echo "<td>".$row['statue']."</td>";
                echo "<td>".$row['reason']."</td>";
                echo "<td> <a href='delete_prisoner.php?id=".$row['ID']."'  onclick='return confirm(\"Are you sure you want to delete this prisoner?\")'>Delete</a> </td>";
                echo "</tr>";
              }
              ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

      <!--/.end of the prisoner tabel-->


</section>

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
