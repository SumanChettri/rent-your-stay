<!DOCTYPE html>
<html>
<head>
    <title>Room Booking Form</title>
</head>
<body>
    <h1>Room Booking Form</h1>
    <?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        // Get the form data
        $name = $_POST['name'];
        $checkin_date = $_POST['checkin_date'];
        $checkout_date = $_POST['checkout_date'];

        // Building the payload
        $payload = array(
            'name' => $name,
            'checkin_date' => $checkin_date,
            'checkout_date' => $checkout_date
        );

        // Sending the request to the server
        $ch = curl_init('admin_ind');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);

        // Checking the response status code
        if ($response == 'OK') {
            echo "Your booking has been successfully sent to the admin panel.";
        } else {
            echo "There was an error while processing your booking. Please try again later.";
        }
    }
    ?>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="checkin_date">Check-in Date:</label>
        <input type="date" id="checkin_date" name="checkin_date" required><br><br>
        <label for="checkout_date">Checkout Date:</label>
        <input type="date" id="checkout_date" name="checkout_date" required><br><br>
        <input type="submit" name="submit" value="Book Room">
    </form>
</body>
</html>
