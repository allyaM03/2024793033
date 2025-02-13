<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: profile list.php"); // Redirect to homepage if user is still logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="container text-center">
        <div class="card shadow p-4 rounded" style="max-width: 400px; margin: auto;">
            <h2 class="mb-3">You've been logged out</h2>
            <p class="text-muted">We're sorry to see you go. If you'd like to log in again, click below.</p>
            <a href="index.html" class="btn btn-primary">Back to Login</a>
        </div>
    </div>
    <footer class="footer">
    <p>&copy; 2025 UiTM E-Profile. All rights reserved.</p>
  </footer>
  <script>
        // JSON object storing logout messages
        const logoutData = {
            title: "You've been logged out",
            message: "We're sorry to see you go. If you'd like to log in again, click below.",
            timestamp: new Date().toLocaleString()
        };

        // Display JSON data dynamically
        document.getElementById("logoutTitle").innerText = logoutData.title;
        document.getElementById("logoutMessage").innerText = logoutData.message;

        // Save JSON data to local storage (for later use)
        localStorage.setItem("logoutData", JSON.stringify(logoutData));

        // Retrieve JSON data from local storage (if needed)
        const storedData = JSON.parse(localStorage.getItem("logoutData"));
        console.log("Stored Logout Data:", storedData);
    </script>
</body>
</html>
