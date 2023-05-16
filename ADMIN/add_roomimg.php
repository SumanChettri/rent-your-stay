<!DOCTYPE html>
<html>
<head>
  <title>Add Image to Database</title>
  <style>
  /* Center the form on the page */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}

/* Style the input field and button */
input[type="file"] {
  padding: 10px;
  margin-right: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[type="submit"] {
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Style the success and error messages */
.success, .error {
  margin-top: 20px;
  padding: 10px;
  border-radius: 5px;
}

.success {
  background-color: #DFF2BF;
  border: 1px solid #4F8A10;
  color: #4F8A10;
}

.error {
  background-color: #FFBABA;
  border: 1px solid #D8000C;
  color: #D8000C;
}


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

  // If add button is clicked
  if (isset($_POST['add'])) {
    $name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    $type = $_FILES['image']['type'];
    $content = file_get_contents($tmp_name);
    $content = mysqli_real_escape_string($conn, $content);
    // Insert data into table
    $sql = "INSERT INTO photos (name, size, type, content) VALUES ('$name', '$size', '$type', '$content')";

    if (mysqli_query($conn, $sql)) {
        echo
        "<script>alert('New room added successfully')</script>";

        header("Location: admin_index.php");
    } 
    
        else {
      echo "Error adding room: " . mysqli_error($conn);
    }
  }

  // Close connection
  mysqli_close($conn);
  ?>

  <form method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button type="submit" name="add">Add Image</button>
  </form>
</body>
</html>

 