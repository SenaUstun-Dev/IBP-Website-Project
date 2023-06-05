<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "prison_news";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$yetki = "2";
$fullName = $_POST["fullName"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$stmt = $conn->prepare("INSERT INTO users (yetki, fullName, email, pass) VALUES ('$yetki', '$fullName', '$email', '$pass')");

if ($stmt->execute()) {

    header("Location: index.php");
    exit();

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
