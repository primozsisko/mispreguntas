<?php
include_once 'controller.php';

$status = true;


if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $errores = validate_form_signup($usuario, $password, $firstname, $lastname, $email);

    // Si el array $errores está vacío, se aceptan los datos y se asignan a variables
    if(sizeof($errores) == 0) {
        create_user();
        echo "Enviado";
        $status = true;
    }else{
        $status = false;
        echo "Errores en el Formato:<br>";
        foreach ($errores as $error){
            echo "<li> $error </li>";
        }
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
            <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">QUIZZER</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="quizzes.html">Quizzes</a></li>
                    <li><a href="login.html">Log in</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="quizzes.html">Quizzes</a></li>
                    <li><a href="login.html">Log in</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>




 <h2 class="header center green-text green-lighten-2">Sign up</h2>
<br>
        <div class="container">

            <div class="row">

                <form class="col s12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">account_circle</i>
                                <input name="username" type="text" <?php if(!$status){ echo 'value="'.$usuario.'"'; } ?> class="validate">
                                <label for="username">User Name</label>
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">lock</i>
                                <input name="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">account_circle</i>
                                <input name="firstname" type="text" <?php if(!$status){ echo 'value="'.$firstname.'"'; } ?> class="validate">
                                <label for="firstname">First Name</label>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">account_circle</i>
                                <input name="lastname" type="text" <?php if(!$status){ echo 'value="'.$lastname.'"'; } ?> class="validate">
                                <label for="lastname">Last Name</label>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                                <i class="material-icons prefix">email</i>
                                <input name="email" type="email" <?php if(!$status){ echo 'value="'.$email.'"'; } ?> class="validate">
                                <label for="email">Email</label>
                            </div>   
                        </div>
                        <div class="row">
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
                            <li><a class="white-text" href="index.html">Home</a></li>
                            <li><a class="white-text" href="about.html">About</a></li>
                            <li><a class="white-text" href="quizzes.html">Quizzes</a></li>
                            <li><a class="white-text" href="login.html">Log in</a></li>
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
