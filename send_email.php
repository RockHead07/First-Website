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
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'example@gmail.com';        // Your Gmail
        $mail->Password   = 'bla bla ble ble blu';           // App Password (16 characters)
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email content
        $mail->setFrom('example@gmail.com', $name);     // Your Gmail as sender
        $mail->addAddress('example@gmail.com');         // Receiver (yourself)
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
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <title>Success</title>
            <link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <style>
                .swal2-popup {
                    font-family: 'Poppins', sans-serif;
                    background-color: #000 !important;
                    color: #fff !important;
                    border-radius: 10px;
                }
                .swal2-title,
                .swal2-html-container {
                    color: #fff !important;
                }
                .swal2-confirm {
                    background-color: #444 !important;
                    color: #fff !important;
                    font-family: 'Poppins', sans-serif;
                }
            </style>
        </head>
        <body>
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
        </body>
        </html>
        ";

    } catch (Exception $e) {
        // Error popup
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <title>Error</title>
            <link href='https://fonts.googleapis.com/css2?family=Poppins&display=swap' rel='stylesheet'>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <style>
                .swal2-popup {
                    font-family: 'Poppins', sans-serif;
                    background-color: #000 !important;
                    color: #fff !important;
                }
                .swal2-title,
                .swal2-html-container {
                    color: #fff !important;
                }
                .swal2-confirm {
                    background-color: #444 !important;
                    color: #fff !important;
                    font-family: 'Poppins', sans-serif;
                }
            </style>
        </head>
        <body>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Failed!',
                text: 'Mailer Error: " . addslashes($mail->ErrorInfo) . "',
                background: '#000',
                color: '#fff',
                confirmButtonColor: '#444',
                confirmButtonText: 'OK'
            }).then(() => {
                window.history.back();
            });
        </script>
        </body>
        </html>
        ";
    }
}
?>
<?php
// End of send_email.php