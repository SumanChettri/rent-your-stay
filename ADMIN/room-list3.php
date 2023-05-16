<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Detail</title>
    <link rel="stylesheet" href="../css/room-detail.css"/>
</head>
<body>


    <main>
        <div class="first-section">
            <div class="room">
                <img class="room-image" src="../images/local6.jpeg" alt="room-image">
            </div>
            <div class="room">
                <img class="room-image" src="../images/local2.jpg" alt="room-image">
            </div>
            <div class="room">
                <img class="room-image" src="../images/local1.jfif" alt="room-image">
            </div>
            <div class="room">
                <img class="room-image" src="../images/local4.jfif" alt="room-image">
            </div>
        </div>
        
        <div class="second-section">
            <div class="room-detail">

            <?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    
 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

    // Prepare the SQL query
    $sql = "SELECT * FROM rooms limit 2,1";
    
    // Display the results in a table
  
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);
    $r_id =$rows["id"];
    $r_name=$rows["room_name"];
    $r_price=$rows["price"];
    $r_address=$rows["address"];
    
  
?>    

             <h2 class="room-name"> <?php echo $rows["room_name"]; ?> </h2>
                <p class="room-place"> <?php echo $rows["address"]; ?></p>
                <p class="room-price">  <?php echo $rows["price"]; ?> <span class="per-month"> per month </span></p>
                <p class="result"></p>
                <form method="POST">
                <input type="submit" id="view-btn" name="submit" value="Bookroom" onclick="btn()"> 
                </form>
            </div>


            <!-- 
  // MySQL database connection settings
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "database";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM rooms";
     -->
  
  <?php  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "database";
 $conn = mysqli_connect($servername, $username, $password, $dbname);

 if(isset($_POST["submit"])){
    //  $room_name = $_POST["r_name"];
    //  $price = $_POST["r_price"];
    //  $address =$_POST["r_address"];
    $id =$r_id;
    $room_name = $r_name;
     $price = $r_price;
     $address =$r_address;
    

  // Create connection
  //$conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  //$value=10;
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
    
     //Insert the room information into the database
       $sql = "INSERT INTO pending_list (Id, Roomname, price)
      VALUES ('$id','$room_name', '$price')";
    
    if (mysqli_query($conn, $sql)) {
      echo
       "<script>alert('Your request is in process')</script>";
      
    }
    
     else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: user_dashboard.php");
    }

    ?>

    <?php

  // Close connection
  mysqli_close($conn);

  ?>


            <div class="rating">
                <h1 class="rating-room"> Room Rating </h1>
                <div class="room-rating">
                    <h1>4.6</h1>
                </div>
            </div>
        </div>
    </main>
    <div class="footer">
        <p><a href="room-list.php">Rooms in East</a></p>
        <p><a href="room-list.php">Rooms in South</a></p>
        <p><a href="room-list.php">Rooms in West</a></p>
        <p><a href="room-list.php">Rooms in North</a></p>
    </div>
</body>
</html>