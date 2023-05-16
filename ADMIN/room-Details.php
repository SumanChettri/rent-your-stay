<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Room List </title>
    <link rel="stylesheet" href="../css/room-list.css"/>
</head>
<body>
      

    <main>
        <div class="section">
            <div class="room">
                <div class="room-pic-div">
                    <img class="room-image" src="../images/local3.jpeg" alt="room-2">
                </div>
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
                    $sql = "SELECT * FROM rooms";
                    
                   
                    
                    // Display the results in a table
                  
                    $result = mysqli_query($conn, $sql);
                    $rows = mysqli_fetch_assoc($result);
                   
                ?> 

                    <p class="room-name"><?php echo $rows["room_name"];?> </p>
                    <p class="room-place"> <?php echo $rows["address"];?> </p>
                    <p class="room-price"><?php echo $rows["price"];?> <span class="per-month"> per month</span> </p>
                   <a href="room-list.php"> <button class="view-btn">  VIEW </button> </a>
                </div>
            </div>
            <div class="room">
                <div class="room-pic-div">
                    <img class="room-image" src="../images/local5.jpg" alt="room-2">
                </div>
                <div class="room-detail">
                    <?php
                         $sql = "SELECT * FROM rooms LIMIT 1,1";
                    
                   
                    
                         // Display the results in a table
                       
                         $result = mysqli_query($conn, $sql);
                         $rows = mysqli_fetch_assoc($result);
                         ?>
                    <p class="room-name"> <?php echo $rows["room_name"];?>  </p>
                    <p class="room-place"> <?php echo $rows["address"];?>  </p>
                    <p class="room-price"> <?php echo $rows["price"];?> <span class="per-month"> per month</span> </p>
                    <a href="room-list2.php"> <button class="view-btn">  VIEW </button> </a>
                </div>
            </div>
            <div class="room">
                <div class="room-pic-div">
                    <img class="room-image" src="../images/local7.png" alt="room-2">
                </div>
                <div class="room-Details">
                    
                       <?php
                       $sql = "SELECT * FROM rooms LIMIT 2,1";
                  
                 
                  
                       // Display the results in a table
                     
                       $result = mysqli_query($conn, $sql);
                       $rows = mysqli_fetch_assoc($result);
                       ?>
                    <p class="room-name">  <?php echo $rows["room_name"];?>  </p>
                    <p class="room-place"> <?php echo $rows["address"];?></p>
                    <p class="room-price"><?php echo $rows["price"];?> per month</span> </p>
                    <a href="room-list3.php"> <button class="view-btn">  VIEW </button> </a>
                </div>
            </div>
        </div>
    </main>
        <div class="footer">
            <p><a href="room-Details.php">PG in Gangtok</a></p>
            <p><a href="room-Details.php">PG in Namchi</a></p>
            <p><a href="room-Details.php">PG in Rangpo</a></p>
            <p><a href="room-Details.php">PG in Singtam</a></p>
        </div>
    <script src="index.js"></script>
</body>
</html>