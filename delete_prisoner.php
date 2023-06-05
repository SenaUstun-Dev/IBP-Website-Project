<?php
include "common_pages/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $prisonerID = $_GET['id'];

  $deleteQuery = "DELETE FROM prisoners WHERE ID='$prisonerID'";
  $deleteResult = mysqli_query($conn, $deleteQuery);

  if ($deleteResult) {
    header("Location: p_infoedit.php");
    exit;
  } else {
    echo "Prisoner couldnt be deleted " . mysqli_error($conn);
  }
}
?>
