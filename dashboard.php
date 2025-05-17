<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <div class="dashboard-container">
    <div class="card">
      <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
      <p>Anda telah berhasil login ke sistem.</p>
      <a href="logout.php" class="logout-button">Logout</a>
    </div>
  </div>
</body>
</html>
