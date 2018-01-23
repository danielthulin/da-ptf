
<?php

print_r($_POST);
// define variables and set to empty values
$name_error = $address_error = $email_error = $phone_error = "";
$name = $address = $email = $phone = $message = $pet = $mainkey = $copy = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "Namn är nödvändigt";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-öA-Ö´ ]*$/",$name)) {
      $name_error = "Bara bokstäver och mellanrum är tillåtna";
    }
  }

  if (empty($_POST["address"])) {
    $address_error = "Adress är nödvändigt";
  } else {
    $address = test_input($_POST["address"]);
    // check if address only contains letters and whitespace
    if (!preg_match("/^[a-öA-Ö0-9 ]*$/",$address)) {
      $address_error = "Bara bokstäver, siffror och mellanrum är tillåtna";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email är nödvändigt";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Ogiltigt email-format";
    }
  }

  if (empty($_POST["phone"])) {
    $phone_error = "Telefonnummer är nödvändigt";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone number is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Ogiltigt telefonnummer";
    }
  }

    $pet = test_input($_POST["pet"]);
    $mainkey = test_input($_POST["mainkey"]);
    $copy = test_input($_POST["copy"]);

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }



  if ($name_error == '' and $email_error == '' and $phone_error == '' and $address_error = ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }

      $to = 'd1thulin@live.se';
      $subject = 'Felanmälan';
      $subjectcopy = 'Kopia på felanmälan';
      if (mail($to, $subject, $message)){
          if($copy == 'yes'){
          mail($email, $subjectcopy, $message);
          }
          $success = "Meddelande skickat, tack för att du kontaktade oss!";
          $name = $address = $email = $phone = $message = $pet = $mainkey = $copy = '';
      }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}