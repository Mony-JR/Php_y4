<?php
// Database connection settings
$host = 'v2-db-1'; // MySQL container name
$username = 'root';
$password = 'root';
$database = 'rupp';
$log_file = 'db_errors.log';

// Enable MySQLi Exception Mode
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from POST
    $stu_name = $_POST['stu_name'];
    $stu_email = $_POST['stu_email'];
    $stu_password = password_hash($_POST['stu_password'], PASSWORD_BCRYPT); // Secure password storage

    try {
        // Create a connection
        $conn = new mysqli($host, $username, $password, $database);

        // Prepare and bind SQL query to insert user data
        $stmt = $conn->prepare("INSERT INTO user (stu_name, stu_email, stu_password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $stu_name, $stu_email, $stu_password);

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo "User registered successfully!";
        } else {
            echo "Error registering user!";
        }

        // Close the prepared statement
        $stmt->close();

    } catch (Exception $e) {
        // Log error to file with timestamp
        $error_message = date('Y-m-d H:i:s') . " - Error: " . $e->getMessage() . "\n";
        file_put_contents($log_file, $error_message, FILE_APPEND);

        // Display a user-friendly error message
        echo "An error occurred. Please check the log file for more details.";
    } finally {
        // Close connection
        if (isset($conn)) {
            $conn->close();
        }
    }
} else {
    echo "Please submit the form.";
}
?>
