<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $gender  = htmlspecialchars($_POST['gender']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "dana.bagus07@gmail.com";  // <-- Replace this with your real email address
    $subject = "New Contact Form Message";
    $body    = "You have received a new message from your website contact form:\n\n"
            . "Name: $name\n"
            . "Gender: $gender\n"
            . "Email: $email\n"
            . "Message:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Failed to send message.'); window.history.back();</script>";
    }
}
?>
