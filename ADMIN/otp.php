<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Generate a random OTP
    $otp = mt_rand(100000, 999999);

    // Store the OTP in the session or database for verification

    // Send the OTP to the email address
    $to = $_POST['email'];
    $subject = 'OTP Verification';
    $message = 'Your OTP: ' . $otp;
    $headers = 'From: yourname@example.com' . "\r\n" .
        'Reply-To: yourname@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'OTP sent to your email address.';
    } else {
        echo 'Failed to send OTP. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Send OTP to Email</title>
</head>
<body>
    <h1>Send OTP to Email</h1>
    <form method="POST" action="">
        <label for="email">Email address:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <input type="submit" value="Send OTP">
    </form>
</body>
</html>
