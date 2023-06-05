<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "prison_news"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$prisonerName = $_POST["fullName"];
$statue = $_POST["statue"];
$reason = $_POST["reason"];

$stmt = $conn->prepare("INSERT INTO prisoners (fullName, statue, reason) VALUES ( '$prisonerName', '$statue', '$reason')");

if ($stmt->execute()) {

    header("Location: p_infoedit.php");
    exit();

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
