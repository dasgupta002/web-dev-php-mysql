<?php
  session_start();

  $conn = new mysqli('localhost', 'root', '', 'bookshop');
  if($conn->connect_error) {
      die('Error: '.$conn->connect_error);
  }

  $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if(strlen($firstName) < 2) {
      echo 'first name needed';
  } else if(strlen($lastName) < 2) {
      echo 'last name needed';
  } else if(strlen($email) <= 4) {
      echo 'email needed';
  } else if(filter_var($email , FILTER_VALIDATE_EMAIL) == false) {
      echo 'email invalid';
  } else if(strlen($password) <= 4) {
      echo 'password short';
  } else {
      $hashedKey = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

      $query = "SELECT * FROM members WHERE email = '$email'";
      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
      $rows = mysqli_num_rows($result);
      $data = mysqli_fetch_array($result);
      
      if($rows < 1) {
          $user = $conn->query("INSERT INTO members (fname, lname, email, password) VALUES ('$firstName', '$lastName', '$email', '$hashedKey')");

          if($user) {
              $_SESSION['login'] = $conn->insert_id;
              $_SESSION['firstName'] = $firstName;
              $_SESSION['lastName'] = $lastName;
              
              echo 'success';
          }
      } else {
          echo 'email taken';
      }
  }
?>