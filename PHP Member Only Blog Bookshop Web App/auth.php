<?php
  session_start();

  $conn = new mysqli('localhost', 'root', '', 'bookshop');
  if($conn->connect_error) {
      die('Error: '.$conn->connect_error);
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM members WHERE email = '$email'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $rows = mysqli_num_rows($result);
  $data = mysqli_fetch_array($result);
      
  if($rows >= 1) {
        if(password_verify($password, $row['password'])) {
            $_SESSION['login'] = $row['ID'];
            $_SESSION['firstName'] = $row['fname'];
            $_SESSION['lastName'] = $row['lname'];
              
            echo 'success';
        } else {
            echo 'invalid credentials';
        }
  }
?>