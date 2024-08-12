<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $message = htmlspecialchars($_POST['message']);

    // Validate the username and password (this is a simple example, you may need to implement more robust authentication)
    $valid_user = "your_username";
    $valid_pass = "your_password";

    if ($username === $valid_user && $password === $valid_pass) {
        $to = "your_email@example.com";
        $subject = "Message from $username";
        $body = "Message: $message";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send the message.";
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>