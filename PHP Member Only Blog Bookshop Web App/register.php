<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta name = "description" content = "">
    <meta name = "author" content = "">
    <title>PHP Member Only Bookshop Blog</title>
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link href = "css/business-casual.css" rel = "stylesheet">
    <link href = "http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel = "stylesheet" type = "text/css">
    <link href = "http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel = "stylesheet" type = "text/css">
    <script src = "js/jquery.js"></script>

    <script type = "text/javascript">
       $(document).ready(function() {
           $('#registerForm').click(function() {
               let firstName = $('#firstName').val()
               let lastName = $('#lastName').val()
               let email = $('#email').val()
               let password = $('#password').val()

               $.ajax({
                   type: 'POST',
                   url: 'user.php',
                   data: 'firstName=' + firstName + '&lastName=' + lastName + '&email=' + email + '&password=' + password,
                   success: function(status) {
                       if(status == 'success') {
                           $('#notification').html('<div class = "alert alert-success"><strong>Account</strong> registered!</div>')
                           
                           window.location.href = 'index.php'
                       } else if(status == 'email taken') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Email address</strong> has been already taken!</div>')                           
                       } else if(status == 'email invalid') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Email address</strong> is not valid!</div>')                           
                       } else if(status == 'email needed') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Email address</strong> could not be empty!</div>')                           
                       } else if(status == 'first name needed') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>First name</strong> could not be empty!</div>')                           
                       } else if(status == 'last name needed') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Last name</strong >could not be empty!</div>')                           
                       } else if(status == 'password short') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Password</strong> must be at least four characters long!</div>')                           
                       } else {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Error</strong> while creating an account!</div>')                           
                       }
                   },
                   beforeSend: function() {
                       $('#notification').html('Processing request!')
                   }
               })

               return false
           })
       })
    </script>
</head>
<body>
    <?php require_once 'navigation.php'; ?>

    <div class = "container">
        <div class = "row">
            <div class = "box">
                <div class = "col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Register
                        <strong>form</strong>
                    </h2>
                    <div id = "notification"></div>
                    <hr>
                    <form role = "form" autocomplete = "off">
                        <div class = "row">
                            <div class = "form-group col-lg-4">
                                <label>First Name</label>
                                <input type = "text" id = "firstName" name = "firstName" maxlength = "25" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-4">
                                <label>Last Name</label>
                                <input type = "text" id = "lastName" name = "lastName" maxlength = "25" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-4">
                                <label>Email Address</label>
                                <input type = "email" id = "email" name = "email" maxlength = "30" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-4">
                                <label>Password</label>
                                <input type = "password" id = "password" name = "password" maxlength = "10" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-12">
                                <button type = "submit" id = "registerForm" class = "btn btn-default">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src = "js/bootstrap.min.js"></script>
</body>
</html>