<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and MySQL Connection</title>
</head>
<body>
    <?php 
    // MySQL connection
    $host = 'localhost:3306';
    $username = 'root';
    $password = '';
    $database = 'db_php';

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "<p>Connected to MySQL successfully!</p>";
    ?>
    <a href="../week1.php"><button>Week2</button></a>
</body>
</html>
