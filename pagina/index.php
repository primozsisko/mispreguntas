<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>QUIZZER</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


    </head>
    <body>
        <nav class="green darken-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">QUIZZER</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="quizzes.php">Quizzes</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                    <li><a href="login.php">Log in</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="quizzes.php">Quizzes</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                    <li><a href="login.php">Log in</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container" style="background: rgba(0, 0, 0, 0.6); border-radius: 5px; margin-top: 2%; ">
                    <br><br>
                    <h1 class="header center green-text green-lighten-2">QUIZZER</h1>
                    <div class="row center">
                        <h5 class="header col s12 green-text green-darken-4 light">The best way to share and make quizzes to improve your learning</h5>
                    </div>
                    <div class="row center">
                        <a href="signup.php" id="download-button" class="btn-large waves-effect waves-light green lighten-1">Sign Up Now</a>
                    </div>
                    <br><br>

                </div>
            </div>
            <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
        </div>





        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center green-text"><i class="material-icons">check_box</i></h2>
                            <h5 class="center">Speeds up learning</h5>

                            <p class="light">With Quizzer you can syntethize your subjects contents into quizzes in order to self evaluate your learning proccess during your studies period</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center green-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Challenge friends</h5>

                            <p class="light">By utilizing Quizzer you can send quizzes to your friends, you can compete on who gets better scores.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center green-text"><i class="material-icons">share</i></h2>
                            <h5 class="center">Share with others</h5>

                            <p class="light">Got a high grade? why dont you share it? also you can create quizzes to evaluate friends or as a teacher grade your own students.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <footer class="page-footer green lighten-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of 3 college students working on this project for the IT systems development subject.</p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="white-text" href="index.php">Home</a></li>
                            <li><a class="white-text" href="about.php">About</a></li>
                            <li><a class="white-text" href="quizzes.php">Quizzes</a></li>
                            <li><a href="ContactUs.php">Contact Us</a></li>
                            <li><a class="white-text" href="login.php">Log in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="green darken-1">
                <div class="container" >
                    Made by <a class="green-text text-lighten-3"> Johan, Airan & Primož</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>
