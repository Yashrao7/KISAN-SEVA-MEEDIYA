<?php
session_start();

// If the form was submitted with a username and password
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Store the user inputs in variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    // In a real-world application, you would check the submitted username and password against your database here

    // For example purposes, let's assume we have a user named 'admin' with a password of 'password'
    if ($username === 'admin' && password_verify('password', $password)) {
        // If the login was successful, create a session variable for the user
        $_SESSION['user'] = $username;

        // Redirect the user to another page, like their dashboard or homepage
        header('Location: 1.html');
    } else {
        // If the login was unsuccessful, redirect the user back to the login page with an error message
        header('Location: login.php?error=incorrect_credentials');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>

    <?php if (isset($_GET['error']) && $_GET['error'] === 'incorrect_credentials'): ?>
        <p style="color: red;">Incorrect username or password.</p>
    <?php endif; ?>
</body>
</html>