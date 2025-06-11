<?php
// Show all PHP errors (important for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Brevo SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp-relay.brevo.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '8f6da3001@smtp-brevo.com';    // From your Brevo screenshot
        $mail->Password   = 'IqWB0SpsjxmVK3gD';          // Replace with your actual SMTP key
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email content
        $mail->setFrom('dana.bagus07@gmail.com', $name); // Replace with a verified Brevo sender
        $mail->addAddress('dana.bagus07@gmail.com');            // Who receives the email
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <strong>Name:</strong> $name<br>
            <strong>Gender:</strong> $gender<br>
            <strong>Email:</strong> $email<br>
            <strong>Message:</strong><br>$message
        ";

        $mail->send();

        // Success popup
        echo "
        <html><head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>
            <style>
                .swal2-popup { font-family: 'Poppins', sans-serif; background-color: #000; color: #fff; border-radius: 10px; }
                .swal2-title, .swal2-html-container { color: #fff; }
                .swal2-confirm { background-color: #444; color: #fff; }
            </style>
        </head><body>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Message sent successfully!',
                    background: '#000',
                    color: '#fff',
                    confirmButtonColor: '#444',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.history.back();
                });
            </script>
        </body></html>
        ";

    } catch (Exception $e) {
        echo "
        <html><head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>
            <style>
                .swal2-popup { font-family: 'Poppins', sans-serif; background-color: #000; color: #fff; border-radius: 10px; }
                .swal2-title, .swal2-html-container { color: #fff; }
                .swal2-confirm { background-color: #444; color: #fff; }
            </style>
        </head><body>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Failed!',
                    html: 'Mailer Error: " . addslashes($mail->ErrorInfo) . "',
                    background: '#000',
                    color: '#fff',
                    confirmButtonColor: '#444',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.history.back();
                });
            </script>
        </body></html>
        ";
    }
}
?>
