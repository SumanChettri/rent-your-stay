

<!DOCTYPE html>
<head>
  <title>addroom
  </title>
  <style>
    body{
      background-color:rgb(223, 223, 223);
      font-size:18px;
    }
    form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: 0 auto;
}

.main{
  background-color:rgb(172, 172, 172);
  width:40%;
  margin:auto;
  padding-bottom:30px;
  margin-top:5%;
}

label {
  font-weight: bold;
  margin-top: 1rem;
}

input[type="text"],
input[type="number"],
textarea {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 0.5rem;
  margin-top: 0.5rem;
  font-size: 1rem;
}

textarea {
  height: 5rem;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 0.5rem;
  border: none;
  border-radius: 0.5rem;
  margin-top: 1rem;
  cursor: pointer;
  font-size: 1rem;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
</style>
</head>

<body>
  <div class="main">
<form method="post" >
  <label for="room_name">Room Name:</label>
  <input type="text" name="room_name" id="room_name" required>

  <label for="price">price:</label>
  <input type="number" name="price" id="price">



  
  <label for="address">Room Address:</label>
  <!-- <input type="address" name="address" id="address" required> -->
  <textarea id="address" name="address" rows="4" cols="10">

</textarea>

<?php
// Set up the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




// Get the room information from the form
if(isset($_POST["submit"])){
$room_name = $_POST['room_name'];
$price = $_POST['price'];
$address =$_POST['address'];




 //Insert the room information into the database
   $sql = "INSERT INTO rooms (room_name, price, address)
  VALUES ('$room_name', '$price', '$address')";

if (mysqli_query($conn, $sql)) {
  echo
   "<script>alert('New room added successfully')</script>";
   header("Location: add_roomimg.php");
}

 else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


// Close the database connection
mysqli_close($conn);






?>


<!-- 
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
  if (isset($_POST['submit'])) {
    $name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $size = $_FILES['image']['size'];
    $type = $_FILES['image']['type'];
    $content = file_get_contents($tmp_name);
    $content = mysqli_real_escape_string($conn, $content);
    // Insert data into table
    $sql = "INSERT INTO photos (name, size, type, content) VALUES ('$name', '$size', '$type', '$content')";

    if (mysqli_query($conn, $sql)) {
      echo "Image added successfully";
    } else {
      echo "Error adding image: " . mysqli_error($conn);
    }
  }

  // Close connection
  mysqli_close($conn);
  ?> -->

  
   <button type="submit" name="submit">Add Room</button>


  </form>
  </div>

  </body>
</html>

