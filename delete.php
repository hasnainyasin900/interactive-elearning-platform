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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE idUsers = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Redirect back to the main page
    header("Location: index.php");
    exit;
}

$conn->close();
?>
