<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "samiahunjra@gmail.com"; // Your email address
    $headers = "From: " . $email;
    $txt = "You have received an email from " . $name . ".\n\n" . $message;

    if (mail($to, $subject, $txt, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
