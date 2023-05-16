<!DOCTYPE html>
<html>
  <head>
    <title>approve page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color:lightgrey;
      }
      
      header {
        background-color: #333;
        color: #fff;
        padding: 10px;
      }
      
      h1 {
        margin: 0;
      }
      
      nav {
        background-color: #f1f1f1;
        height: 100%;
        width: 200px;
        position: fixed;
        top: 60px;
        left: 0;
        overflow-x: hidden;
        padding-top: 20px;
      }
      
      nav a {
        display: block;
        padding: 16px;
        text-decoration: none;
        color: #333;
      }
      
      nav a:hover {
        background-color: #ddd;
        color: #333;
      }
      
      main {
        margin-left: 300px;
        padding: 20px;
        
      }
      .delete_div{
        margin-left:200px
      }
 
      .admin{
        margin-left:200px;
      }

      #myTable td, th{
        padding-left:600px;
        border: 1px solid lightblue;
        width: 30px;
        padding: 18px;
      }
      #myTable th{
        border: 1px solid darkblue;
        width: 30px;
        padding: 18px;
      }
      main{
        padding-left:200px;
      }
    </style>
  </head>
  <body>

      <p style="text-align:center; color:darkblue; font-size:30px;">List of Booked rooms:</p>


    <main>


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

// Select all the rooms from the database
$sql = "SELECT * FROM pending_list where status='approved'";
$result = mysqli_query($conn, $sql);

// Check if there are any rooms in the database
if (mysqli_num_rows($result) > 0) {
  // Output the data for each room
  

  // Create a table and add columns
  echo '<table id="myTable" border="1px">
  <tr><th>RoomID</th><th>Room Name</th><th>Price</th><th>Status</th></tr>';

  // Add data to the table
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Roomname"] . "</td><td>" . $row["price"] . "</td><td>" . $row["status"] . "</td></tr>";
  }
} else {
  echo "No list found in the database.";
}

// Close the database connection
mysqli_close($conn);
?>

    </main>

  </body>
</html>


