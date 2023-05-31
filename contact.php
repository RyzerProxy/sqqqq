<?php
$to = "ryzerheat@gmail.com"; // Add the owners' email addresses here
$subject = "New Contact Form Submission";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = "From: $name <$email>";

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
  echo "Thank you for contacting us. We will get back to you soon.";
} else {
  echo "Sorry, there was a problem sending your message. Please try again later.";
}
?>
