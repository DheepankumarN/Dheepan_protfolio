<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // echo "Name: " . $name . "<br>";
    // echo "Email: " . $email . "<br>";
    // echo "Subject: " . $subject . "<br>";
    // echo "Message: " . $message . "<br>";
    
    // Email details
    $to = "n.dheepankumar@gmail.com"; // Replace with your email address
    // $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
