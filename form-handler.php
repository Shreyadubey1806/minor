<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];

  

  // Insert data into your database

  $message = 'Thank you for contacting us! We will be in touch soon.';
  echo json_encode($message); // Send a response message
} else {
  echo 'Invalid request.';
}
