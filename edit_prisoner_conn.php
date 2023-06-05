<?php
include "common_pages/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ID = $_POST['ID'];
  $fullName = $_POST['fullName'];
  $statue = $_POST['statue'];
  $reason = $_POST['reason'];

  $updateQuery = "UPDATE prisoners SET fullName='$fullName', statue='$statue', reason='$reason' WHERE id='$ID'";
  $updateResult = mysqli_query($conn, $updateQuery);

  if ($updateResult) {
    
    header("Location: p_infoedit.php");
    exit;
  } 
}
?>