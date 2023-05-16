<!DOCTYPE html>
<html>
  <head>
    <title>PG Website - Book a Room</title>
  </head>
  <body>
    <h1>Book a Room</h1>
    <form method="post" action="book-room.php">
      <?php
        $db_host = "localhost"; // Database host name
        $db_user = "root"; // Database user name
        $db_pass = ""; // Database password
        $db_name = "database"; // Database name
        
        // Establishing database connection
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        
        // Retrieving the selected PG facility details
        $pg_id = $_GET['id'];
        $sql = "SELECT * FROM rooms WHERE id='$pg_id'";
        $result = mysqli_query($conn, $sql);
        $pg_facility = mysqli_fetch_assoc($result);
        
        // Closing database connection
        mysqli_close($conn);
      ?>
      <label for="pg_facility">Room Name</label>
      <input type="text" name="pg_facility" value="<?php echo $pg_facility['name']; ?>" readonly>
      <br>
      <label for="booking_date">Booking Date:</label>
      <input type="date" name="booking_date" required>
      <br>
      <label for="payment_amount">Payment Amount:</label>
      <input type="number" name="payment_amount" min="0" required>
      <br>
      <input type="hidden" name="pg_id" value="<?php echo $pg_facility['id']; ?>">
      <input type="submit" value="Book Now" name="submit">
    </form>
  </body>
</html>
