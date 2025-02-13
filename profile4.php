<?php
// Read profile data from JSON file
$jsonData = file_get_contents("profile4.json");
$profile = json_decode($jsonData, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $profile['name']; ?> - Profile</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <div class="card mx-auto" style="max-width: 200px;">
      <img src="<?php echo $profile['image']; ?>" class="img-fluid rounded-top" alt="Student Photo">
      <div class="card-body">
        <h5 class="card-title"><?php echo $profile['name']; ?></h5>
        <p class="card-text"><strong>Name:</strong> <?php echo $profile['fullname']; ?></p>
        <p class="card-text"><strong>Username:</strong> <?php echo $profile['username']; ?></p>
        <p class="card-text"><strong>Program:</strong> <?php echo $profile['program']; ?></p>
        <p class="card-text"><strong>Year:</strong> <?php echo $profile['year']; ?></p>
        <p class="card-text"><strong>Date of Birth:</strong> <?php echo $profile['dob']; ?></p>
        <p class="card-text"><strong>Phone Number:</strong> <?php echo $profile['phone number']; ?></p>
        <p class="card-text"><strong>GPA:</strong> <?php echo $profile['gpa']; ?></p>
        <p class="card-text"><strong>Advisor:</strong> <?php echo $profile['advisor']; ?></p>
        <a href="profile list.php" class="btn btn-secondary">Back to Profile List</a>
        <a href="logout.php" class="btn btn-danger">Logout</a><br><br><br>
      </div>
    </div>
  </div>
  <footer class="footer">
    <p>&copy; 2025 UiTM E-Profile. All rights reserved.</p>
  </footer>
</body>
</html>