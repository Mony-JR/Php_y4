<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
    <h2>Register User</h2>
    <form action="log_success.php" method="POST">
        <label for="stu_name">Name:</label>
        <input type="text" id="stu_name" name="stu_name" required><br><br>

        <label for="stu_email">Email:</label>
        <input type="email" id="stu_email" name="stu_email" required><br><br>

        <label for="stu_password">Password:</label>
        <input type="password" id="stu_password" name="stu_password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
