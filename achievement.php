<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievement</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav>
            <!-- <div class="container"> -->
            <div class="nav-wrapper">
                <a style="padding-left: 30px;" href="index.php" class="brand-logo">PT. Globalindo Intimates</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=#about">About Us</a></li>
                    <li><a href="index.php?page=#product">Product</a></li>
                    <li><a href="achievement.php">Achievement</a></li>
                    <li><a href="event.php">Event</a></li>
                    <li><a href="index.php?page=#contact">Contact</a></li>
                    <li><a href="visitor.php">Visitor</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <!-- </div> -->
        </nav>
    </div>
    <!-- akhir navbar -->

    <!-- side-nav -->
    <ul class="sidenav" id="mobile">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=#about">About Us</a></li>
        <li><a href="index.php?page=#product">Product</a></li>
        <li><a href="achievement.php">Achievement</a></li>
        <li><a href="event.php">Event</a></li>
        <li><a href="index.php?page=#contact">Contact</a></li>
        <li><a href="visitor.php">Visitor</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    <!-- akhir side-nav -->

    <!-- Card panel -->
    <div class="container">
        <div class="row">
            <div class="col m4 12">
                <div class="card">
                    <div class="card-image">
                        <img src="img/achievement/API-certificate.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col m4 12">
                <div class="card">
                    <div class="card-image">
                        <img src="img/achievement/API-certificate.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col m4 12">
                <div class="card">
                    <div class="card-image">
                        <img src="img/achievement/API-certificate.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col m4 12">
                <div class="card">
                    <div class="card-image">
                        <img src="img/achievement/API-certificate.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col m4 12">
                <div class="card">
                    <div class="card-image">
                        <img src="img/achievement/API-certificate.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col m4 12">
                <div class="card">
                    <div class="card-image">
                        <img src="img/achievement/API-certificate.jpg">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-card-panel -->

    <!-- footer -->
    <footer class="red darken-1 white-text center" style="padding: 10px 0;">
        <p>Copyright ©2021 All rights reserved | Made PT. Globalindo Intimates</p>
    </footer>
    <!-- end-footer -->


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- script-side-nav -->
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
    </script>
    <!-- akhir script-nav -->

    <!-- materialbox -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var image = document.querySelectorAll('.materialboxed');
            var instances = M.Materialbox.init(image);
        });
    </script>
    <!-- end materialbox -->

</body>

</html>