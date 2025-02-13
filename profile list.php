<?php
// Read profiles from JSON file
$jsonData = file_get_contents("profile list.json");
$profiles = json_decode($jsonData, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Profile List</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h1 class= "text-center mb-4">Welcome to Student Profiles</h1>
    <div class="row d-flex justify-content-center">
      <?php foreach ($profiles as $profile): ?>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img src="<?php echo $profile['image']; ?>" class="card-img-top" alt="Student Photo">
            <div class="card-body">
              <h5 class="card-title"><?php echo $profile['name']; ?></h5>
              <p class="card-text">Program: <?php echo $profile['program']; ?></p>
              <a href="<?php echo $profile['link']; ?>" class="btn btn-primary">View Profile</a><br><br>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Logout Button -->
    <div class="text-center mt-4">
      <a href="logout.php" class="btn btn-danger">Logout</a><br><br><br><br>
    </div>
  </div>
  <footer class="footer">
    <p>&copy; 2025 UiTM E-Profile. All rights reserved.</p>
  </footer>
</body>
</html>
