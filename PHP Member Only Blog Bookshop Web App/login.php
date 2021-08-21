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
           $('#loginForm').click(function() {
               let email = $('#email').val()
               let password = $('#password').val()

               $.ajax({
                   type: 'POST',
                   url: 'auth.php',
                   data: 'email=' + email + '&password=' + password,
                   success: function(status) {
                       if(status == 'success') {
                           $('#notification').html('<div class = "alert alert-success"><strong>Authenticated</strong> user!</div>')
                           
                           window.location.href = 'blog.php'
                       } else if(status == 'invalid credentials') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Authentication failed!</strong> Check email and password again.</div>')                           
                       } else {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Error</strong> while processing request!</div>')                           
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
                    <div class = "alert alert-danger">
                        <strong>You must be logged in to view the blog!</strong>
                    </div>
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Login</strong>
                    </h2>
                    <div id = "notification"></div>
                    <hr>
                    <form role = "form" autocomplete = "off">
                        <div class = "row">
                            <div class = "form-group col-lg-4">
                                <label>Email Address</label>
                                <input type = "email" id = "email" name = "email" maxlength = "30" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-4">
                                <label>Password</label>
                                <input type = "password" id = "password" name = "password" maxlength = "10" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-12">
                                <button type = "submit" id = "loginForm" class = "btn btn-default">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class = "form-group col-lg-12">
                        <a href = "register.php">
                            <button class = "btn btn-default">Not a member? Register here!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src = "js/bootstrap.min.js"></script>
</body>
</html>