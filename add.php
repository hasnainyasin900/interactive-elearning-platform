<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "loginsystemtut";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uidUsers'];
    $email = $_POST['emailUsers'];
    $password = $_POST['pwdUsers'];

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert the new user into the database
    $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES ('$username', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect back to the main page
    header("Location: index.php");
    exit;
}

$conn->close();
?>
