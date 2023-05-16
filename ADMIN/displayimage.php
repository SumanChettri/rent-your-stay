<!DOCTYPE html>
<html>
<head>
  <title>Display Images</title>
  <style>
    /* Add CSS code here */
  </style>
</head>
<body>
  <?php
// MySQL database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve all images from the database
$sql = "SELECT id, name, type FROM photos";
$result = mysqli_query($conn, $sql);

// Display each image on the page
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $type = $row['type'];
    echo "<div class='image-container'>";
    echo "<img src='display_image.php?id=$id' alt='$name'>";
    echo "<p>$name</p>";
    echo "</div>";
  }
} else {
  echo "No images found";
}

// Close connection
mysqli_close($conn);
?>

</body>
</html>
