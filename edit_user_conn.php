<?php
include "common_pages/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ID = $_POST['userID'];
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $updateQuery = "UPDATE users SET fullName='$fullName', email='$email', pass='$password' WHERE userID='$ID'";
  $updateResult = mysqli_query($conn, $updateQuery);

  if ($updateResult) {
    
    header("Location: user_infoedit.php");
    exit;
  } 
}
?>
