<?php
if (isset($_POST['user_email'])) {

  // Collect the form data
  $to = 'mnaradigital1@gmail.com'; // Your email address
  $subject = 'New subscriber from Digital Mnara';
  $message = 'You have a new subscriber from Digital Mnara:' . "\n\n";
  $message .= 'Email: ' . $_POST['user_email'] . "\n\n";

  // Send the email
  mail($to, $subject, $message);

  // Redirect the user to a thank-you page
  header('Location: thankyou');
  exit();
}
?>