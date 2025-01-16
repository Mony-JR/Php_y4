<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
    <h1>Create Account</h1>
    <form action="" method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit">Create Account</button>
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        // MySQL connection details
        $host = 'localhost:3306';
        $username = 'root';
        $password = '';
        $database = 'db_php';

        // Create a connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data and sanitize it
        $email = $conn->real_escape_string($_POST['email']);
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']); // Hash password

        // Insert user into the database
        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Account created successfully!</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }

        // Close the connection
        $conn->close();
    }
    ?>
</body>
</html>
