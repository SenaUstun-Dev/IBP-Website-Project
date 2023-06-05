<?php
include "common_pages/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $yetki = $_POST['yetki'];

  $insertQuery = "INSERT INTO users (yetki, fullName, email, pass) VALUES ('$yetki', '$fullName', '$email', '$password')";
  $insertResult = mysqli_query($conn, $insertQuery);

  if ($insertResult) {
    header("Location: user_infoedit.php");
    exit;

  } else {
    echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
  }
}
?>
