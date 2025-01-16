<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: left;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">List of Users</h1>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Username</th>
                <th>Password (Hashed)</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // MySQL connection details
        $host = 'localhost:3306';
        $username = 'root';
        $password = '';
        $database = 'db_php';

        // Connect to the database
        $db = mysqli_connect($host, $username, $password, $database);

        // Check the connection
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to fetch all data from the users table
        $data = mysqli_query($db, "SELECT * FROM users");

        // Loop through and display data in table rows
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['username']) . "</td>";
            echo "<td>" . htmlspecialchars($row['password']) . "</td>";
            echo "</tr>";
        }

        // Close the connection
        mysqli_close($db);
        ?>
        </tbody>
    </table>
</body>
</html>
