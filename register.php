<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="register_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
