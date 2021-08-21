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

    <script src="js/jquery.js"></script>

    <script type = "text/javascript">
       $(document).ready(function() {
           $('#contactForm').click(function() {
               let fullName = $('#fulltName').val()
               let email = $('#email').val()
               let message = $('#message').val()

               $.ajax({
                   type: 'POST',
                   url: 'mail.php',
                   data: 'fullName=' + fullName + '&email=' + email + '&message=' + message,
                   success: function(status) {
                       console.log(status)
                       if(status == 'success') {
                           $('#notification').html('<div class = "alert alert-success"><strong>Message</strong> delivered!</div>')
                       } else if(status == 'name needed') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Full name</strong> could not be empty!</div>')                           
                       } else if(status == 'name long') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Full name</strong> could not be longer than twenty five characters!</div>')
                       } else if(status == 'email invalid') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Email address</strong> is not valid!</div>')                           
                       } else if(status == 'email needed') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Email address</strong> could not be empty!</div>')                           
                       } else if(status == 'message needed') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>First name</strong> could not be empty!</div>')                           
                       } else if(status == 'message long') {
                           $('#notification').html('<div class = "alert alert-danger"><strong>Message</strong> could not be longer than hundred characters!</div>')                           
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
                    <hr>
                    <h2 class = "intro-text text-center">Contact
                        <strong>for more authentic collection of preserved history of literature</strong>
                    </h2>
                    <hr>
                </div>
                <div class = "col-md-8">
                    <iframe src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d722.3239494044385!2d1.4336027292184494!3d43.60038236987942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb655a0c8e7b%3A0xf76319604b06bd2f!2s11-9%20Rue%20des%20Novars%2C%2031300%20Toulouse%2C%20France!5e0!3m2!1sen!2sin!4v1629566382559!5m2!1sen!2sin" width = "100%" height = "400" style = "border:0;" allowfullscreen = "" loading = "lazy"></iframe>
                </div>
                <div class = "col-md-4">
                    <p>Phone:
                        <strong>133-476-7899</strong>
                    </p>
                    <p>Email:
                        <strong><a>ranchnationale@yahoo.com</a></strong>
                    </p>
                </div>
                <div class = "clearfix"></div>
            </div>
        </div>
        <div class = "row">
            <div class = "box">
                <div class = "col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id = "notification"></div>
                    <form role = "form">
                        <div class = "row">
                            <div class = "form-group col-lg-4">
                                <label>Name</label>
                                <input type = "text" id = "fullname" name = "fullname" maxlength = "25" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-4">
                                <label>Email Address</label>
                                <input type = "email" id = "email" name = "email" maxlength = "30" class = "form-control">
                            </div>
                            <div class = "form-group col-lg-12">
                                <label>Message</label>
                                <textarea id = "message" name = "message" maxlength = "100" class = "form-control" rows = "6"></textarea>
                            </div>
                            <div class = "form-group col-lg-12">
                                <button type = "submit" id = "contactForm" class = "btn btn-default">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>