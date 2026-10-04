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
    $id = $_POST['idUsers'];
    $username = $_POST['uidUsers'];
    $email = $_POST['emailUsers'];
    $password = $_POST['pwdUsers'];

    // Hash the password before updating the record
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Update the record in the database
    $sql = "UPDATE users SET uidUsers='$username', emailUsers='$email', pwdUsers='$hashedPassword' WHERE idUsers=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Redirect back to the main page
    header("Location: index.php");
    exit;
}
?>
