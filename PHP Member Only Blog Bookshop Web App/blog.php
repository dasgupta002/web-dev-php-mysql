<?php
  session_start();

  if(isset($_SESSION['login'])) {
      $firstName = $_SESSION['firstName'];
      $lastName = $_SESSION['lastName'];
?>

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
                    <h2 class = "text-center">
                        Welcome <?php echo $firstName; echo " "; echo $lastName; ?> ~ <a href = "session.php">Logout</a>
                    </h2>
                    <hr>
                    <h2 class = "intro-text text-center">About some
                        <strong>Classics</strong>
                    </h2>
                    <hr>
                </div>
                <div class = "col-lg-12 text-center">
                    <img class = "img-responsive img-border img-full" src = "img/romantic.jpg">
                    <h2>Shades of Romanticism in English Literature
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p class = "text-justify">
                        Massa id neque aliquam vestibulum morbi blandit cursus risus. Parturient montes nascetur ridiculus mus mauris vitae 
                        ultricies leo integer. Orci nulla pellentesque dignissim enim sit amet. Suspendisse in est ante in nibh mauris cursus. 
                        Volutpat diam ut venenatis tellus in metus. Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget 
                        nullam. Elementum pulvinar etiam non quam lacus suspendisse faucibus. At elementum eu facilisis sed odio morbi. Est 
                        ullamcorper eget nulla facilisi. Sit amet volutpat consequat mauris nunc congue. Felis eget velit aliquet sagittis id 
                        consectetur purus. Semper quis lectus nulla at volutpat diam ut.
                    </p>
                    <button type = "button" class = "btn btn-warning btn-lg" data-toggle = "modal" data-target = "#romantic">Delve into story!</button>
                    <hr>
                </div>
                <div class = "col-lg-12 text-center">
                    <img class = "img-responsive img-border img-full" src = "img/shakespeare.jpg">
                    <h2>Thoughts about Shakespeare in Modern English
                        <br>
                        <small>August 14, 2011</small>
                    </h2>
                    <p class = "text-justify">
                        Laoreet id donec ultrices tincidunt arcu. Urna id volutpat lacus laoreet. Nunc vel risus commodo viverra maecenas accumsan 
                        lacus vel. Interdum varius sit amet mattis vulputate enim. Ut tellus elementum sagittis vitae et leo duis. Semper risus in 
                        hendrerit gravida. Suspendisse ultrices gravida dictum fusce ut placerat orci. Nulla malesuada pellentesque elit eget gravida 
                        cum sociis. Id aliquet lectus proin nibh nisl condimentum. Egestas diam in arcu cursus euismod quis. Ut aliquam purus sit amet 
                        luctus. Dolor sed viverra ipsum nunc aliquet bibendum enim. Faucibus scelerisque eleifend donec pretium vulputate sapien nec 
                        sagittis aliquam.
                    </p>
                    <button type = "button" class = "btn btn-warning btn-lg" data-toggle = "modal" data-target = "#shakespeare">Delve into story!</button>
                    <hr>
                </div>
                <div class = "col-lg-12 text-center">
                    <ul class = "pager">
                        <li class = "previous"><a>&larr; Older</a>
                        </li>
                        <li class = "next"><a>Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id = "romantic" class = "modal fade" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                    <h4 class = "modal-title">Shades of Romanticism in English Literature</h4>
                </div>
                <div class = "modal-body">
                    <p class = "text-justify">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro 
                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt 
                        ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>
                <div class = "modal-footer">
                    <button type = "button" class = "btn btn-warning" data-dismiss = "modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <div id = "shakespeare" class = "modal fade" role = "dialog">
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <button type = "button" class = "close" data-dismiss = "modal">&times;</button>
                    <h4 class = "modal-title">Thoughts about Shakespeare in Modern English</h4>
                </div>
                <div class = "modal-body">
                    <p class = "text-justify">
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
                        quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est 
                        laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi 
                        optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. 
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et 
                        molestiae non recusandae.
                    </p>
                </div>
                <div class = "modal-footer">
                    <button type = "button" class = "btn btn-warning" data-dismiss = "modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
  } else {
      header("location: login.php");
  }
?>