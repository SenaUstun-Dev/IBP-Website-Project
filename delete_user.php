<?php
include "common_pages/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $userID = $_GET['id'];

  $deleteQuery = "DELETE FROM users WHERE userID='$userID'";
  $deleteResult = mysqli_query($conn, $deleteQuery);

  if ($deleteResult) {
    header("Location: user_infoedit.php");
    exit;
  } else {
    echo "User could not be deleted: " . mysqli_error($conn);
  }
}
?>
