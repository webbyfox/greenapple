<?php

    // process.php

    $errors = array();  // array to hold validation errors
    $data = array();        // array to pass back data

    // validate the variables ========
    if (empty($_POST['fullname']))
      $errors['fullname'] = 'Name is required.';

    if (empty($_POST['email']))
      $errors['email'] = 'Superhero alias is required.';

    if (empty($_POST['comment']))
      $errors['comment'] = 'Superhero alias is required.';

    // return a response ==============

    // response if there are errors
    if ( ! empty($errors)) {

      // if there are items in our errors array, return those errors
      $data['success'] = false;
      $data['errors']  = $errors;
    } else {

    $to = "mr.mansuri@gmail.com";
    $subject = "Green Apple Building - Contact Form";


    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= "From: Green Apple Building<info@greenapplebuildingservices.co.uk>" . "\r\n";

    $message = "Full name: " . $_POST['fullname'] ."<br>";
    $message .= "Email: " . $_POST['email'] ."<br><br>";
    $message .= "Message: <br>" . $_POST['comment'] ."<br>";
    mail($to,$subject,$message,$headers);


  // if there are no errors, return a message
  $data['success'] = true;
  $data['message'] = 'Success!';
}

// return all our data to an AJAX call
echo json_encode($data);