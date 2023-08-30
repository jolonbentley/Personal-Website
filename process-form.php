<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // You can perform validation and sanitation here
    
    $to = "jolon.dev@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for your message!";
} else {
    echo "Error: This script can only be accessed via a POST request.";
}
?>

