<?php
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $emailto = "";
  $subject = "Form Submission";

  if(strlen($fullName) < 2) {
      echo 'name needed';
  } else if(strlen($fullName) > 25) {
      echo 'name long';
  } else if(strlen($email) < 4) {
      echo 'email needed';
  } else if(filter_var($email , FILTER_VALIDATE_EMAIL) == false) {
      echo 'email invalid';
  } else if(strlen($message) < 2) {
      echo 'message needed';
  } else if(strlen($message) > 100) {
      echo 'message long';
  } else {
      require "phpmailer/PHPMailerAutoload.php";
      
      $mail = new PHPMailer;

      $mail->isSMTP();
      $mail->Host = "smtp.gmail.com";
      $mail->SMTPAuth = true;
      $mail->Username = "";
      $mail->Password = "";
      $mail->SMTPSecure = "tls";
      $mail->Port = 587;
      $mail->AddReplyTo($email);
      $mail->From = $email;
      $mail->FromName = $fullName;
      $mail->addAddress($emailto, "Administrator");
      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = $message;

      if(!$mail->send()) {
          echo $mail->ErrorInfo;
      } else {
          echo 'success';
      }
  }
?>