<?php
include_once 'controller.php';

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST'){
    $subject = $_POST['subject'];
    $body =$_POST['body'];
    $head = $_POST['email'];
    if(validate_email($subject, $body, $head)){
        include 'mail.php';
        $to = "alu0101013534@ull.edu.es";
        $headers = array(
        "From: ".$head);
        $sendMail       = new SendMail();
        $sendMailFacade = new sendMailFacade($sendMail);
        $sendMailFacade->setTo($to)->setSubject($subject)->setBody($body)->setHeaders($headers)->send();
     
        echo "<script type='text/javascript'>alert('Gracias por contactar con nosotros !!');</script>";
    }else{
        echo "<script type='text/javascript'>alert('Error: no puede quedar campos vacios.');</script>";
    }
}

?>

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

 <h2 class="header center green-text green-lighten-2">Contact Us</h2>
<br>
        <div class="container">

            <div class="row">

                <form class="col s12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="row"> 
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">email</i>
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="subject" name="subject" type="text" class="validate">
                                <label for="subject">Subject</label>
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                             <i class="material-icons prefix">mode_edit</i>
           <textarea id="body" name="body" class="materialize-textarea"></textarea>
          <label for="body">Body</label>
                            </div>   
                        </div>
                      
                        <div class="row center">
                            <div class="input-field col s6 offset-s3">
                                <button class="btn  green-effect green" type="submit" name="submit">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>   
                        </div>
                    </div>
                </form>
                
                
                
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
                            <li><a class="white-text" href="ContactUs.php">Contact Us</a></li>
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