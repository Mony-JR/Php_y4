<?php
// Database connection settings
$host = 'v2-db-1'; // MySQL container name
$username = 'root';
$password = 'root';
$database = 'rupp';
$log_file = 'db_errors.log';

// Enable MySQLi Exception Mode
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create a connection
try {
    $conn = new mysqli($host, $username, $password, $database);

    // Check if data is being sent via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Assume the data is sent as form-data
        $title = $_POST['title']; // Example data
        $content = $_POST['content']; // Example data

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $content);

        // Execute the query
        if ($stmt->execute()) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data";
        }

        $stmt->close();
    } else {
        echo "No POST data received.";
    }

} catch (Exception $e) {
    // Log the error
    file_put_contents($log_file, date('Y-m-d H:i:s') . " - Error: " . $e->getMessage() . "\n", FILE_APPEND);
    echo "Error occurred. Check log for details.";
}

// Close connection (if connection was established)
if (isset($conn)) {
    $conn->close();
}
?>
