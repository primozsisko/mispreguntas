<?php
include_once 'controller.php';
/* Comprobar que se ha logeado, sino devolver a login */
secure_user();

if(isset($_POST['logout'])){
	disconect_user();
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
            <div class="nav-wrapper container"><a id="logo-container" href="loggeduser.php" class="brand-logo">QUIZZER</a>
                <ul class="right hide-on-med-and-down">
                    <li style="margin-left: 5px; margin-right: 5px;"><b>User: <?php echo $_SESSION['user']; ?></b></li>
                    <li>
                    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<button class="btn btn-small waves-effect waves-light green darken-1" type="submit" name="logout">Log out</button>
						</form>
                    </li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li style="margin-left: 5px; margin-right: 5px;"><b>User: <?php echo $_SESSION['user']; ?></b></li>
                    <li>
                    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<button class="btn btn-small waves-effect waves-light green darken-1" type="submit" name="logout">Log out</button>
						</form>
                    </li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
		<br></br>
		<div class="center">
			<div>
				<i class="large material-icons grey-text text-lighten-2">school</i> 
			</div>
			<div>
				<h3 class="header center green-text text-lighten-2">Quiz name</h3>
			</div>	 
			</br>
		</div>
		<div>
			<div class="row">
				<div class="col s5 offset-s2">
					 <h5 class="header center green-text green-darken-2">Quiz description</h5>
				</div>
				<div class="col s3">
					 <h5 class="header center green-text green-darken-2">Leaderboards</h5>
				</div>
			</div>
			<div class="row">
				<div class="col s5 offset-s2">
					<table class="striped centered responsive-table">
						<thead>
						  <tr>
							  <th>Description</th>
						  </tr>
						</thead>
				
						<tbody>
						  <tr>
							<td>Eclai sadasdr dasdasd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd 
							sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd
							sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd
							sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd sadasdsd</td>
						  </tr>
						  </tr>
						</tbody>
					</table>
				</div>
				<div class="col s3">
					<table class="striped centered responsive-table">
						<thead>
						  <tr>
							  <th>Username</th>
							  <th>Score</th>
						  </tr>
						</thead>
				
						<tbody>
						  <tr>
							<td>johan</td>
							<td>86%</td>
						  </tr>
						  <tr>
							<td>arian</td>
							<td>76%</td>
						  </tr>
						  <tr>
							<td>primoz</td>
							<td>49%</td>
						  </tr>
						  <tr>
							<td>gonzalo</td>
							<td>10%</td>
						  </tr>
						  <tr>
							<td>roberto</td>
							<td>100%</td>
						  </tr>
						</tbody>
					</table>
				</div>
			</div>
			</br>
			</br>
			<div class="card-panel grey lighten-4 center">
				<span class="green-text text-darken-1 center">
					Information of the quiz including quiz description and the current leaderboard of users that had solved this quiz
				</span>
			</div>
			</br>
        </div>
        <footer class="page-footer green lighten-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of 3 college students working on this project for the IT systems development subject.</p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text"></h5>
                        <ul>
                            <li></li>
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
