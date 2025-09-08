<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php"); // not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Upload Book (Admin Only)</title>
</head>
<body>
  <h2>Upload PDF Book</h2>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Description:</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Choose PDF:</label><br>
    <input type="file" name="pdf_file" accept="application/pdf" required><br><br>

    <button type="submit">Upload</button>
  </form>

  <br>
  <a href="logout.php">Logout</a>
</body>
</html>
