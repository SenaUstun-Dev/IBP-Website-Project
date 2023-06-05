<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prison_news";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the email, current password, and new password from the form
    $email = $_SESSION["email"];
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"]; 

    // Check if the current password is correct
    $checkPasswordQuery = "SELECT * FROM users WHERE email = '$email' AND pass = '$currentPassword'";
    $checkPasswordResult = $conn->query($checkPasswordQuery);

    if ($checkPasswordResult->num_rows == 1) {

        $updatePasswordQuery = "UPDATE users SET pass = '$newPassword' WHERE email = '$email'";

        if ($conn->query($updatePasswordQuery) === TRUE) {

            $_SESSION['password_change_success'] = true;
            header("Location: index.php");
            exit();
        } else {

            $_SESSION['password_change_success'] = false;
            header("Location: pass_change.php");
            exit();
        }
    } else {

        $_SESSION['password_change_success'] = false;
        header("Location: pass_change.php");
        exit();
    }
}

$conn->close();
?>
