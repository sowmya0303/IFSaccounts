<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = htmlspecialchars(trim($_POST["name"]));
   $email = htmlspecialchars(trim($_POST["email"]));
   $message = htmlspecialchars(trim($_POST["message"]));
   $to = "sowmyayadav0303@gmail.com"; // Replace with your email address
   $subject = "New Contact Form Submission";
   $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
   $headers = "From: $email\r\n";
   $headers .= "Reply-To: $email\r\n";
   if (mail($to, $subject, $body, $headers)) {
       echo "Thank you for contacting us! We will get back to you shortly.";
   } else {
       echo "Sorry, something went wrong. Please try again.";
   }
}
?>