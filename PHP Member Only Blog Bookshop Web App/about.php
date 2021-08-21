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
</head>
<body>
    <?php require_once 'navigation.php'; ?>

    <div class = "container">
        <div class = "row">
            <div class = "box">
                <div class = "col-lg-12">
                    <hr>
                    <h2 class = "intro-text text-center">About
                        <strong>the initiative to preserve literature</strong>
                    </h2>
                    <hr>
                </div>
                <div class = "col-md-4">
                    <style>
                        .embed-container { 
                            position: relative; 
                            padding-bottom: 56.25%; 
                            height: 0; 
                            overflow: hidden; 
                            max-width: 100%; 
                        } 
                        .embed-container iframe, .embed-container object, .embed-container embed { 
                            position: absolute; 
                            top: 0; 
                            left: 0; 
                            width: 100%; 
                            height: 100%; 
                        }
                    </style>
                    <div class = 'embed-container'>
                        <iframe src = 'https://www.youtube.com/embed/eTFy8RnUkoU' frameborder = '0' allowfullscreen></iframe>
                    </div>                    
                </div>
                <div class = "col-md-8">
                    <p class = "text-justify">
                        Id aliquet risus feugiat in ante metus dictum at. Elementum integer enim neque volutpat ac tincidunt vitae semper quis. Enim diam 
                        vulputate ut pharetra sit. Quis ipsum suspendisse ultrices gravida dictum fusce. Pharetra convallis posuere morbi leo urna. Augue 
                        ut lectus arcu bibendum at varius vel pharetra vel. Amet mattis vulputate enim nulla aliquet porttitor lacus. Sit amet nulla 
                        facilisi morbi tempus. Augue interdum velit euismod in pellentesque massa. Purus faucibus ornare suspendisse sed nisi lacus 
                        sed viverra. Lectus quam id leo in. Nisl nisi scelerisque eu ultrices vitae auctor eu augue. Quam adipiscing vitae proin sagittis.
                    </p>
                </div>
                <div class = "clearfix"></div>
            </div>
        </div>
        <div class = "row">
            <div class = "box">
                <div class = "col-lg-12">
                    <hr>
                    <h2 class = "intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class = "col-sm-4 text-center">
                    <img class = "img-responsive" src = "img/abt1.jpg">
                    <h3>Teressa Raquel</h3>
                </div>
                <div class = "col-sm-4 text-center">
                    <img class = "img-responsive" src = "img/ab2.jpg">
                    <h3>Maria James</h3>
                </div>
                <div class = "col-sm-4 text-center">
                    <img class = "img-responsive" src = "img/ab3.jpg">
                    <h3>Johanneson Smith</h3>
                </div>
                <div class = "clearfix"></div>
            </div>
        </div>

    </div>
    
    <script src = "js/jquery.js"></script>
    <script src = "js/bootstrap.min.js"></script>
</body>
</html>