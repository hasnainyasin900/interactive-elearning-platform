<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
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

// Query to get data
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .form-inline .form-control {
            width: auto;
            display: inline-block;
        }
        .btn-space {
            margin-right: 5px;
        }
        .card {
            margin-bottom: 20px;
        }
        .btn-action {
            margin-right: 5px;
        }
        .card-title {
            text-align: center;
        }
        @media (max-width: 768px) {
            .form-inline {
                display: block;
            }
            .form-inline .form-group {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<br>
<h1 class="card-title" style="text-align: center;">Admin Panel</h1>
<br>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
              
                <h3 class="card-subtitle mb-4">Add New User</h3>
                <form action="add.php" method="post" class="form-inline">
                    <div class="form-group mr-2">
                        <label for="uidUsers" class="sr-only">Username</label>
                        <input type="text" name="uidUsers" id="uidUsers" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group mr-2">
                        <label for="emailUsers" class="sr-only">Email</label>
                        <input type="email" name="emailUsers" id="emailUsers" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group mr-2">
                        <label for="pwdUsers" class="sr-only">Password</label>
                        <input type="password" name="pwdUsers" id="pwdUsers" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
        <h1 class="card-title">User List</h1>
        <div class="card">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["idUsers"] . "</td>";
                                    echo "<td>" . $row["uidUsers"] . "</td>";
                                    echo "<td>" . $row["emailUsers"] . "</td>";
                                    echo "<td>" . $row["pwdUsers"] . "</td>";
                                    echo "<td>
                                            <a href='edit.php?id=" . $row["idUsers"] . "' class='btn btn-warning btn-sm btn-action'>Edit</a>
                                            <a href='delete.php?id=" . $row["idUsers"] . "' class='btn btn-danger btn-sm btn-action' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No data found</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
