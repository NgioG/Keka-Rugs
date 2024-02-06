<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Additional data retrieval

    // Compose the email message
    $subject = "Report Submission";
    $message = "Name: $name\nEmail: $email\n";

    // Additional message composition

    // Send the email
    $to = "recipient@example.com"; // Replace with the recipient's email address
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
