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

    $email = $_POST["email"];
    $password = $_POST["pass"];
    
    $sql = "SELECT yetki FROM users WHERE email = '$email' AND pass = '$password'";
    $result = $conn->query($sql);
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = '$email' AND pass = '$password' ");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login successful
        $row = $result->fetch_assoc();
        $fullName = $row["fullName"];
        $email = $row["email"];
        $yetki = $row["yetki"];

        $_SESSION["fullName"] = $fullName;
        $_SESSION["email"] = $email;
        $_SESSION["yetki"] = $yetki;
        $_SESSION["login"] = true;
        
        header("Location: index.php");
        exit();

    } else { $_SESSION["login"] = false;
        $login_error = "Invalid email or password.";
        header("Location: login_page.php");
        echo '<script>alert("'.$login_error.'");</script>';
        
    }
    $stmt->close();
}

$conn->close();
?>
