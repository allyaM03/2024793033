<?php
// Start session
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: profile list.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded login credentials (for demonstration)
    $validUsername = "2024793033";
    $validPassword = "password123";

    // Check credentials
    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: profile list.php'); // Redirect to profile list page
        exit;
    } else {
        $error = "Invalid username or password.";
    }

    // Check if the user is already logged in
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: profile list.php'); // Redirect if already logged in
    exit;
}
}
?>


