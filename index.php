<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_library";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

echo "<h2>📚 PDF Book Library</h2>";
while($row = $result->fetch_assoc()) {
    echo "<div style='margin:10px; padding:10px; border:1px solid #ccc;'>";
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<a href='" . $row['file_path'] . "' target='_blank'>📖 View Book</a>";
    echo "</div>";
}

$conn->close();
?>
