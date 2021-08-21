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

    <?php
      if(isset($_GET['logout'])) {
          if($_GET['logout'] == "true") {
    ?>        
            <div class = "alert alert-success">
                <a class = "close" data-dismiss = "alert">&times;</a>
                <strong>You have been logged out!</strong>
            </div>
    <?php        
          }      
      }
    ?>

    <div class = "container">
        <div class = "row">
            <div class = "box">
                <div class = "col-lg-12 text-center">
                    <div id = "carousel-example-generic" class="carousel slide">
                        <ol class = "carousel-indicators hidden-xs">
                            <li data-target = "#carousel-example-generic" data-slide-to = "0" class = "active"></li>
                            <li data-target = "#carousel-example-generic" data-slide-to = "1"></li>
                            <li data-target = "#carousel-example-generic" data-slide-to = "2"></li>
                        </ol>
                        <div class = "carousel-inner">
                            <div class = "item active">
                                <img class = "img-responsive img-full" src = "img/slide1.jpg">
                            </div>
                            <div class = "item">
                                <img class = "img-responsive img-full" src = "img/slide2.jpg">
                            </div>
                            <div class = "item">
                                <img class = "img-responsive img-full" src = "img/slide3.jpg">
                            </div>
                        </div>
                        <a class = "left carousel-control" href = "#carousel-example-generic" data-slide = "prev">
                            <span class = "icon-prev"></span>
                        </a>
                        <a class = "right carousel-control" href  ="#carousel-example-generic" data-slide = "next">
                            <span class = "icon-next"></span>
                        </a>
                    </div>
                    <h2 class = "brand-before">
                        <small>Bonjour from</small>
                    </h2>
                    <h1 class = "brand-name">Ranch National Book Shop</h1>
                    <hr class = "tagline-divider">
                    <h2>
                        <small>By
                            <strong>Louis Antoino</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class  ="row">
            <div class = "box">
                <div class = "col-lg-12">
                    <hr>
                    <h2 class = "intro-text text-center">Build a world of books
                        <strong>worth teaching all values of our lifes</strong>
                    </h2>
                    <hr>
                    <img class = "img-responsive img-border img-left" src = "img/intro.jpg">
                    <hr class = "visible-xs">
                    <p class = "text-justify">
                        Scelerisque fermentum dui faucibus in ornare quam viverra. Bibendum enim facilisis gravida neque convallis a cras semper auctor. 
                        Ipsum faucibus vitae aliquet nec ullamcorper sit. Elementum sagittis vitae et leo duis. Volutpat sed cras ornare arcu dui vivamus 
                        arcu felis bibendum. Dictum at tempor commodo ullamcorper a lacus. A cras semper auctor neque vitae. Lectus sit amet est placerat 
                        in egestas erat imperdiet sed. Cursus sit amet dictum sit amet justo. Vestibulum lorem sed risus ultricies. 
                    </p>
                </div>
            </div>
        </div>

        <div class = "row">
            <div class = "box">
                <div class = "col-lg-12">
                    <hr>
                    <h2 class = "intro-text text-center">Pristine atmosphere
                        <strong>to showcase most classics of mordena</strong>
                    </h2>
                    <hr>
                    <p class = "text-justify">
                        Massa ultricies mi quis hendrerit dolor magna. Malesuada fames ac turpis egestas. Aliquam vestibulum morbi blandit cursus. A 
                        pellentesque sit amet porttitor eget dolor morbi. Vulputate odio ut enim blandit volutpat maecenas. Donec enim diam vulputate 
                        ut pharetra sit amet. Varius sit amet mattis vulputate enim. Tristique magna sit amet purus gravida. Tellus orci ac auctor 
                        augue mauris augue neque. Leo a diam sollicitudin tempor id. Ultrices vitae auctor eu augue ut lectus arcu bibendum. Molestie 
                        at elementum eu facilisis sed odio morbi quis commodo. Quisque non tellus orci ac auctor augue mauris augue. Neque laoreet 
                        suspendisse interdum consectetur libero id faucibus nisl tincidunt. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus 
                        mattis rhoncus. Nisi quis eleifend quam adipiscing vitae proin sagittis. Viverra adipiscing at in tellus. Blandit turpis cursus 
                        in hac habitasse.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
    </script>
</body>
</html>