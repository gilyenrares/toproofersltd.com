<?php
if (isset($_POST['contact-submit'])) {

  $firstName = $_POST['fn'];
  $lastName = $_POST['ln'];
  $email = $_POST['email'];
  $phno = $_POST['phno'];
  $area = $_POST['area'];
  $pscd = $_POST['pscd'];
  $description = $_POST['description'];


//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($firstName) || empty($lastName) || empty($email) || empty($phno) || empty($area) || empty($pscd) || empty($description)) {
    header("Location: ../contact.php?error=emptyfields&fn=".$firstName."&ln=".$lastName."&email=".$email."&phno=".$phno."&area=".$area."&pscd=".$pscd."&description=".$description);
    exit();
  }

  //Method that checks if the First Name entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$firstName)) {
    header("Location: ../contact.php?error=invalidFirstName&ln=".$lastName."&email=".$email."&phno=".$phno."&pscd=".$pscd."&description=".$description);
    exit();
  }

  //Method that checks if the Last Name entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$lastName)) {
    header("Location: ../contact.php?error=invalidLastName&fn=".$firstName."&email=".$email."&phno=".$phno."&pscd=".$pscd."&description=".$description);
    exit();
  }

  //Method that checks if the Email entered is valid and returns the user to contact with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../contact.php?error=invalidEmail&fn=".$firstName."&ln=".$lastName."&phno=".$phno."&pscd=".$pscd."&description=".$description);
    exit();
  }

    //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[0-9]*$/",$phno)) {
    header("Location: ../contact.php?error=invalidPhoneNumber&fn=".$firstName."&ln=".$lastName."&email=".$email."&pscd=".$pscd."&description=".$description);
    exit();
  }

      //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$pscd)) {
    header("Location: ../contact.php?error=invalidPostcode&fn=".$firstName."&ln=".$lastName."&email=".$email."&phno=".$phno."&description=".$description);
    exit();
  }

      //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9.?,!\s]*$/",$description)) {
    header("Location: ../contact.php?error=invalidDescription&fn=".$firstName."&ln=".$lastName."&email=".$email."&phno=".$phno."&pscd=".$pscd);
    exit();
  }
  else {
      //Sending an copy of the enquery to the contact-us email
      $to = "info@toproofersltd.com";
      $subject = 'Enquery from: '.$email;
      $message = "Email sent by: \r\n";
      $message .= $firstName." ";
      $message .= $lastName."\r\n";
      $message .= $area.": ".$pscd."\r\n";
      $message .= "\r\n Email message: \r\n";
      $message .= $description."\r\n";
      $message .= "Contact details: \r\n";
      $message .= "Email:  ".$email." \r\n";
      $message .= "Telphone:  ".$phno."\r\n";
      $message .= "Client has accepted to be contacted back via phone call.";
      $headers = "From:".$email."\r\n";
      $headers .= "Reply-to:".$email."\r\n";
      $headers .= "X-Mailer: PHP/".phpversion();
      mail($to, $subject, $message, $headers);
      header("Location: ../contact.php?contact-submit=success");
      exit();
    }
}
else {
  header("Location: ../contact.php");
  exit();
}