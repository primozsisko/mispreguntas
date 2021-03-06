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
					<i class="large material-icons grey-text text-lighten-1">star</i> 
				</div>
				<div>
					<h2 class="header center green-text text-darken-1">Quiz name</h2>
				</div>	 
				</br>
            </div>
			</br>
                <form id="confirm">
					<!--
					<div id="firsttype" class="row">						
						<div class="col s6 offset-s3 left-align">
							<h5 class="green-text text-darken-1 ">Number of question</h5>
							</br>
							<h6 class="green-text text-darken-1">The question comes here... ?</h6>
						</div>
						<div class="row">						
							<div class="col s6 offset-s3 left-align">
								<input id="answer?" type="text" class="validate">
								<label for="answer?">The answer comes here</label>
							</div> 
						</div> 
					</div>
					</br>
					<div id="secondtype" class="row">						
						<div class="col s6 offset-s3 left-align">
							<h5 class="green-text text-darken-1 ">Number of question</h5>
							</br>
							<h6 class="green-text text-darken-1">The question comes here... ?</h6>
						</div>
						<div class="row">						
							<div class="col s6 offset-s3 left-align">
								<p>
									<label>
										<input id="indeterminate-checkbox" type="checkbox" />
										<span>First option</span>
									</label>
								</p>
								<p>
									<label>
										<input id="indeterminate-checkbox" type="checkbox" />
										<span>Second option</span>
									</label>
								</p>								
								<p>
									<label>
										<input id="indeterminate-checkbox" type="checkbox" />
										<span>Third option</span>
									</label>
								</p>								
								<p>
									<label>
										<input id="indeterminate-checkbox" type="checkbox" />
										<span>Fourth option(optional?)</span>
									</label>
								</p>								
								<p>
									<label>
										<input id="indeterminate-checkbox" type="checkbox" />
										<span>Fifth option(optional?)</span>
									</label>
								</p>
							</div> 
						</div> 
					</div>
					</br>
					<div id="thirdtype" class="row">						
						<div class="col s6 offset-s3 left-align">
							<h5 class="green-text text-darken-1 ">Number of question</h5>
							</br>
							<h6 class="green-text text-darken-1">The question comes here... ?</h6>
						</div>
						<div class="row">						
							<div class="col s6 offset-s3 left-align">
								<p>
									<label>
										<input name="group1" type="radio" />
										<span>Option 1</span>
									</label>
								</p>
								<p>
									<label>
										<input name="group1" type="radio" />
										<span>Option 2</span>
									</label>
								</p>
								<p>
									<label>
										<input name="group1" type="radio" />
										<span>Option 3</span>
									</label>
								</p>
								<p>
									<label>
										<input name="group1" type="radio" />
										<span>Option 4</span>
									</label>
								</p>
							</div> 
						</div> 
					</div>
				-->
                </form>
			
			<div class="card-panel grey lighten-4 center">
				<span class="green-text text-darken-1 center">
					Here you can take a look at the list of all quizzes. You can search for them in search bar and and find them below. View the quiz by clicking on
					<i class="small material-icons">pageview</i> and start solving the quiz with a click on<i class="small material-icons">play_arrow</i>
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
		<script>
		
		var allquestions = 1; // DB - enter the count of all questions from data base
		$(document).ready(function(){	
			for(i=1; i <= allquestions; i++){
					var firsttype = "" +
					"<div class=\"row\">						"+
	"						<div class=\"col s6 offset-s3 left-align\">"+
	"							<h5 class=\"green-text text-darken-1 \">"+i+". question</h5>"+
	"							</br>"+
	"							<h6 class=\"green-text text-darken-1\">The question comes here... ?</h6>"+
	"						</div>"+
	"						<div class=\row\">						"+
	"							<div class=\"col s6 offset-s3 left-align\">"+
	"								<input id=\"answer?\" type=\"text\" class=\"validate\">"+
	"								<label for=\"answer?\">The answer comes here</label>"+
	"							</div> "+
	"						</div> "+
	"					</div>"+
	"					</br>";

					var secondtype = "" +
					"<div id=\"secondtype\" class=\"row\">						"+
	"						<div class=\"col s6 offset-s3 left-align\">"+
	"							<h5 class=\"green-text text-darken-1 \">"+i+". question</h5>"+
	"							</br>"+
	"							<h6 class=\"green-text text-darken-1\">The question comes here... ?</h6>"+
	"						</div>"+
	"						<div class=\"row\">						"+
	"							<div class=\"col s6 offset-s3 left-align\">"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"indeterminate-checkbox\" type=\"checkbox\" />"+
	"										<span>First option</span>"+
	"									</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"indeterminate-checkbox\" type=\"checkbox\" />"+
	"										<span>Second option</span>"+
	"									</label>"+
	"								</p>								"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"indeterminate-checkbox\" type=\"checkbox\" />"+
	"										<span>Third option</span>"+
	"									</label>"+
	"								</p>								"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"indeterminate-checkbox\" type=\"checkbox\" />"+
	"										<span>Fourth option(optional?)</span>"+
	"									</label>"+
	"								</p>								"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"indeterminate-checkbox\" type=\"checkbox\" />"+
	"										<span>Fifth option(optional?)</span>"+
	"									</label>"+
	"								</p>"+
	"							</div> "+
	"						</div> "+
	"					</div>";


					var thirdtype = "" +
					"<div id=\"thirdtype\" class=\"row\">						"+
	"						<div class=\"col s6 offset-s3 left-align\">"+
	"							<h5 class=\"green-text text-darken-1 \">"+i+". question</h5>"+
	"							</br>"+
	"							<h6 class=\"green-text text-darken-1\">The question comes here... ?</h6>"+
	"						</div>"+
	"						<div class=\"row\">						"+
	"							<div class=\"col s6 offset-s3 left-align\">"+
	"								<p>"+
	"									<label>"+
	"										<input name=\"group1\" type=\"radio\" />"+
	"										<span>Option 1</span>"+
	"									</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input name=\"group1\" type=\"radio\" />"+
	"										<span>Option 2</span>"+
	"									</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input name=\"group1\" type=\"radio\" />"+
	"										<span>Option 3</span>"+
	"									</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input name=\"group1\" type=\"radio\" />"+
	"										<span>Option 4</span>"+
	"									</label>"+
	"								</p>"+
	"							</div> "+
	"						</div> "+
	"					</div>"+
	"					</br>";
	
	
				var databaseQuesType = "radio11";// DB - insert id for question type from database ... example textfield1, truefalse999, radio11
				var type = databaseQuesType.substring(0,5);
				
				if(type === "textf") 
					$('#confirm').append(firsttype);
				
				else if(type === "truef") 
					$('#confirm').append(secondtype);
				
				else if (type === "radio") {
					$('#confirm').append(thirdtype);
					
				} else 
					alert("Error, the question type is not correct");
			}
				
		});
		

		
		
		</script>