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

    // Get the current data for the selected user
    $sql = "SELECT * FROM users WHERE idUsers = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No data found";
        exit;
    }
} else {
    echo "No ID specified";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .card {
            margin-top: 20px;
        }
        .card-title {
            text-align: center;
        }
        .password-container {
            position: relative;
        }
        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Edit User</h2>
                <form action="update.php" method="post">
                    <input type="hidden" name="idUsers" value="<?php echo $row['idUsers']; ?>">
                    <div class="form-group">
                        <label for="uidUsers">Username:</label>
                        <input type="text" name="uidUsers" id="uidUsers" class="form-control" value="<?php echo $row['uidUsers']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="emailUsers">Email:</label>
                        <input type="email" name="emailUsers" id="emailUsers" class="form-control" value="<?php echo $row['emailUsers']; ?>" required>
                    </div>
                    <div class="form-group password-container">
                        <label for="pwdUsers">Password:</label>
                        <input type="password" name="pwdUsers" id="pwdUsers" class="form-control" value="<?php echo $row['pwdUsers']; ?>" required>
                        <span class="password-toggle" onclick="togglePassword('pwdUsers')">&#128065;</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(elementId) {
            const passwordField = document.getElementById(elementId);
            const toggleIcon = passwordField.nextElementSibling;
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.textContent = "🙈";
            } else {
                passwordField.type = "password";
                toggleIcon.textContent = "👁️";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
