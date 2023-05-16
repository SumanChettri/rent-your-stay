<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard</title>
    <style>
      body {
        font-family: Arial, sans-serif;
     background-color:#B0C4DE;
     margin-bottom:20px;
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
        text-align:center;
        color: green;
      }

      #myTable td, th{
        padding-left:600px;
        border: 1px solid rgb(223, 223, 223);
        width: 30px;
        padding: 18px;
      }
      #myTable th{
        border: 1px solid grey;
        width: 30px;
        padding: 18px;
      }
      .main{
        padding-left:250px;
      }

      .head{
        text-align:center;
        font-style:bold;
      }

    </style>
  </head>
  <body>
   
    <header>
      <h1><marquee>Admin Dashboard</marquee></h1>
    <br><H2 class="head"><a href="../index.html">HOME</a><h2>
    </header>
    <nav>
      <a href="#">Dashboard</a>


      <a href="addroom.php">AddRooms</a>
      <a href="delete.php">Delete rooms</a>
      <a href="users_view.php">Booking request</a>
      <a href="approve.php">Booked Rooms</a>
    </nav>
   
    <div class="admin"><h2>Welcome, Admin!</h2>
      <p>Here Are your Rooms:</p>
    </div>
   
    <div class="main">
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
$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn, $sql);

// Check if there are any rooms in the database
if (mysqli_num_rows($result) > 0) {
  // Output the data for each room
  

  // Create a table and add columns
  echo '<table id="myTable">
  <tr><th>RoomID</th><th>Room Name</th><th>Price</th><th>Address</th></tr>';

  // Add data to the table
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["room_name"] . "</td><td>" . $row["price"] . "</td><td>" . $row["address"] . "</td></tr>";
  }
} else {
  echo "No rooms found in the database.";
}

// Close the database connection
mysqli_close($conn);
?>

    </main>
</div>
  </body>
</html>


