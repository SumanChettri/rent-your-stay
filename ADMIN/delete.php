<!DOCTYPE html>
<html>
<head>
    <style>

        /* Center the form on the page */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
}

/* Style the input field and button */
input[type="text"] {
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
  <title>Delete Record</title>
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

  // If delete button is clicked
  if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    // Delete data from table
    $sql = "DELETE FROM rooms WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
   echo
   "<script> alert('Record deleted successfully'); </script>";
  
   //"Record deleted successfully";
  
    }
    if (mysqli_query($conn, $sql)) {
        header("Location: admin_index.php");
    }
    
        else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }

  // Close connection
  mysqli_close($conn);

  ?>

  <form method="post">
    <label for="id">Enter Room ID to delete:</label>
    <input type="text" name="id" id="id">
    <button type="submit" name="delete">Delete Record</button>
  </form>
</body>
</html>
