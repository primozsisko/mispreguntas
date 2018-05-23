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
	<style>
		.switch label input[type=checkbox]:checked + .lever:after {
			background-color: #66bb6a;
		}
	</style>
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
					<i class="large material-icons grey-text text-lighten-1">edit</i> 
				</div>
				<div>
					<h3 class="header center green-text text-darken-1">Edit quiz:</h3>
					<h2 class="header center green-text text-darken-1">Quiz name</h2>
				</div>	 
				</br>
			</div>
			</br>
			</br>
			<div id="append" class="container">
				
			</div>
			<div class="center">
				<a id="btnappend" class="btn-floating btn-large waves-effect waves-light green darken-1" >
					<i class="material-icons">library_add</i>
				</a>
				<a id="btndone" class="btn-floating btn-large waves-effect waves-light green darken-1" onclick="confirmQuestions()">
					<i class="material-icons">done_all</i>
				</a>
			</div>
			</br>
			
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
			<!-- Show/hide the answer of question type text field -->
		
			function showAnswTextFieldA() {
			
				var second = "#answaseconddiv" + questionNumb;
				var third = "#answathirddiv" + questionNumb;
				if ($(second).is(":hidden")) {
					$(second).show();
				} else if ($(second).is(":visible") & $(third).is(":hidden")) {
					$(third).show();
				}else
					alert("You have reached the limit of the answers!");
				
			}
			
			function hideAnswTextFieldA() {
			
				var second = "#answaseconddiv" + questionNumb;
				var third = "#answathirddiv" + questionNumb;
				
				var secondInput = "#answasecond" + questionNumb;
				var thirdInput = "#answathird" + questionNumb;
				
				
				if ($(third).is(":visible")) {
					
					$(thirdInput).val(null);
					$(third).hide();
					
				} else if ($(third).is(":hidden") & $(second).is(":visible")) {
					
					$(secondInput).val(null);				
					$(second).hide();
					
				}else
					alert("You can't have less than one answer!");
			}
			
			<!-- Show/hide the answer of question type true false -->
			
			function showAnswTextFieldB() {
			
				var fourth = "#answbfourthdiv" + questionNumb;
				var fifth = "#answbfifthdiv" + questionNumb;
				
				if ($(fourth).is(":hidden")) {
					$(fourth).show();
				} else if ($(fourth).is(":visible") & $(fifth).is(":hidden")) {
					$(fifth).show();
				}else
					alert("You have reached the limit of the answers!");
				
			}
			
			function hideAnswTextFieldB() {
			
				var fourth = "#answbfourthdiv" + questionNumb;
				var fifth = "#answbfifthdiv" + questionNumb;
				
				var fourthInput = "#answbfourth" + questionNumb;
				var fifthInput = "#answbfifth" + questionNumb;
				
				var fourthLever = "#truefalsebfourth" + questionNumb;
				var fifthLever = "#truefalsebfifth" + questionNumb;
				
				if ($(fifth).is(":visible")) {
				
					$(fifthInput).val(null);
					$(fifthLever).prop('checked', false);
					$(fifth).hide();
					
				} else if ($(fifth).is(":hidden") & $(fourth).is(":visible")) {
				
					$(fourthInput).val(null);
					$(fourthLever).prop('checked', false);
					$(fourth).hide();
					
				}else
					alert("You can't have less than three answers!");
			}
			
			<!-- Gets the data, when confirming the form gor adding the quiz -->
			
			function confirmQuestions() {
			
				//DB - here saves into database
				for (j=1; j <= question; j++) {	
					var text = '#textfield'+j;
					var truefalse = '#truefalse'+j;
					var radio = '#radio'+j;
					
					if($(text).is(":checked")) {
						alert(text);
						
					} else if($(truefalse).is(":checked")) {
						alert(truefalse);
						
					} else if($(radio).is(":checked")) {
						alert(radio);	
						
					} else {
						alert("Question " + j + ". is not valid. Please, select the type and fill in the necessary information");	
						
					}
				}
			}
			
		</script>
		<script>
		
		var question = 1; // DB - enter the count of all questions from data base
		var questionNumb = 0;
		$(document).ready(function(){
			for (k = 1; k <= question; k++) {
				var befhtmltype = "" +
	"			<div class=\"row\" >"+
	"				<div class=\"col s3 offset-s2\">"+
	"					<h5 class=\"header green-text text-darken-1\">"+k+". question</h5>"+
	"				</div>"+
	"			</div>"+
	"			<div class=\"row\" >"+
	"				<div class=\"col s3 offset-s2\">"+
	"					<h6 class=\"green-text text-darken-1\">Choose the question type: </h6>"+
	"				</div>"+
	"			</div>"+
	"			<div class=\"row\" >"+
	"				<div class=\"col s8 offset-s2\">"+
	"					<form class = \"green-text text-darken-1\">"+
	"						<p>"+
	"						  <label>"+
	"							<input class=\"with-gap\" name=\"questions"+k+"\" type=\"radio\" id=\"textfield"+k+"\"/>"+
	"							<span>Text field question</span>"+
	"						  </label>"+
	"						</p>"+
	"						<p>"+
	"						  <label>"+
	"							<input class=\"with-gap\" name=\"questions"+k+"\" type=\"radio\" id=\"truefalse"+k+"\"/>"+
	"							<span>True, false question</span>"+
	"						  </label>"+
	"						</p>"+
	"						<p>"+
	"						  <label>"+
	"							<input class=\"with-gap\" name=\"questions"+k+"\" type=\"radio\" id=\"radio"+k+"\"/>"+
	"							<span>Radio question</span>"+
	"						  </label>"+
	"						</p>"+
	"					</form>"+
	"				</div>"+
	"			</div>";
	
					// DB - here we declare the question and answers
					var befhtmltextf = "\n" + 
	"				<div id=\"textfield"+k+"div\" class=\"type textfield"+k+"\" hidden> "+ //example: textfield1,texfield43 
	"					<div class=\"row\">"+
	"						<div class=\"col s3 offset-s2\">"+
	"							<h6 class=\"green-text text-darken-1\">Text field type </h6>"+
	"						</div>"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<form id=\"textfieldform"+k+"\" class = \"green-text text-darken-1\" action=\"#\">"+
	"								<p>"+
	"									<input id=\"questiona"+k+"\" type=\"text\" required>"+  //example: questiona1, questiona43
	"									<label for=\"questiona"+k+"\">Write the question</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answafirst"+k+"\" class=\"text\" required>"+
	"									<label for=\"answafirst"+k+"\">First answer</label>"+
	"								</p>"+
						"			<div name=\"answadiv"+k+"\" id=\"answaseconddiv"+k+"\"  class=\"text\" hidden>"+
						"				<p class=\"z-depth-1\">"+
						"					<input id=\"answasecond"+k+"\">"+ 
						"					<label for=\"answasecond"+k+"\">Second answer</label>"+
						"				</p>"+
						"			</div>"+
	"								<div  name=\"answadiv"+k+"\" id=\"answathirddiv"+k+"\" class=\"text\" hidden>"+
			"							<p class=\"z-depth-1\">"+
					"						<input id=\"answathird"+k+"\">"+
					"						<label for=\"answathird"+k+"\">Third answer</label>"+
					"					</p>"+
					"				</div>"+

	"							</form>	"+
	"						</div>"+
	"					</div>"+
	"					<div class=\"row\">"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<a id=\"addanswa"+k+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">add</i>"+
	"							</a>"+
	"							<a id=\"hidanswa"+k+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">remove</i>"+
	"							</a>"+
	"						</div>"+
	"					</div>"+
	"				</div>";
	
				// DB - here we declare the question, answers and values, if the answers are true or false
				var befhtmltruefalse = "\n"+
					"<div id=\"truefalse"+k+"div\" class=\"type truefalse"+k+"\" hidden>"+  //example: truefalse1, truefalse43
	"					<div class=\"row\" >"+
	"						<div class=\"col s10 offset-s2\">"+
	"							<h6 class=\"green-text\">True, false type </h6>"+
	"						</div>"+
	"						<div class=\"col s6 offset-s2 center \" >"+
	"							<form class = \"green-text text-darken-1\" action=\"#\" >"+
	"								<p>"+
	"									<input id=\"questionb"+k+"\" type=\"text\" required>"+  //example: questionb1, questionb43
	"									<label for=\"questionb"+k+"\">Instructions about the multiple choice question</label>"+
	"								</p>"+
	"								</br>"+
	"								</br>"+
	"									<div class=\"switch\">"+
	"										<label>"+
	"										  False"+
	"										  <input id=\"truefalsebfirst"+k+"\" type=\"checkbox\">"+ 
	"										  <span class=\"lever green darken-1\"></span>"+
	"										  True"+
	"										</label>"+
	"									</div>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answbfirst"+k+"\" type=\"text\" required>"+ //example answbfirst1, answbfirst43
	"									<label for=\"answbfirst"+k+"\" >First answer</label>"+
	"								</p>"+
	"								</br>"+
	"								<div class=\"switch\">"+
	"									<label>"+
	"									  False"+
	"									  <input id=\"truefalsebsecond"+k+"\" type=\"checkbox\">"+ //example: truefalsebsecond1, truefalsebsecond43
	"									  <span class=\"lever green darken-1\"></span>"+
	"									  True"+
	"									</label>"+
	"								</div>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answbsecond"+k+"\" type=\"text\" required>"+
	"									<label for=\"answbsecond"+k+"\">Second answer</label>"+
	"								</p>"+
	"								</br>"+
	"								<div class=\"switch\">"+
	"									<label>"+
	"										 False"+
	"										 <input id=\"truefalsebthird"+k+"\" type=\"checkbox\">"+
	"										 <span class=\"lever green darken-1\"></span>"+
	"										 True"+
	"									</label>"+
	"								</div>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answbthird"+k+"\" type=\"text\" required>"+
	"									<label for=\"answbthird"+k+"\" >Third answer</label>"+
	"								</p>"+
	"								<div id=\"answbfourthdiv"+k+"\" hidden>"+  //example: answbfourthdiv1, answbfourthdiv43
		"								"+
		"								</br>"+
		"								<div class=\"switch\">"+
		"									<label>"+
		"										 False"+
		"										 <input id=\"truefalsebfourth"+k+"\" type=\"checkbox\">"+
		"										 <span class=\"lever green darken-1\"></span>"+
		"										 True"+
		"									</label>"+
		"								</div>"+
		"								<p class=\"z-depth-1\">"+
		"									<input id=\"answbfourth"+k+"\" type=\"text\">"+
		"									<label for=\"answbfourth"+k+"\">Fourth answer</label>"+
		"								</p>"+
	"								</div>"+
	"								<div id=\"answbfifthdiv"+k+"\" hidden>	"+
	"									</br>	"+
	"									<div class=\"switch\">"+
	"										<label>"+
	"										  False"+
	"										  <input id=\"truefalsebfifth"+k+"\" type=\"checkbox\">"+
	"										  <span class=\"lever green darken-1\"></span>"+
	"										  True"+
	"										</label>"+
	"									</div>"+
	"									<p class=\"z-depth-1\">"+
	"										<input id=\"answbfifth"+k+"\" type=\"text\">"+
	"										<label for=\"answbfifth"+k+"\">Fifth answer</label>"+
	"									</p>"+
	"								</div>"+
	"							</form>"+
	"						</div>"+
	"					</div>"+
	"					<div class=\"row\">"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<a id=\"addanswb"+k+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">add</i>"+
	"							</a>"+
	"							<a id=\"hidanswb"+k+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">remove</i>"+
	"							</a>"+
	"						</div>						"+
	"						</br>"+
	"					</div>"+
	"				</div>";
	
				// DB - here we declare the question, answers and values, if the answers are true or false
				var befhtmlradio = "\n"+
	"				<div id=\"radio"+k+"div\" class=\"type radio"+k+"\" hidden>"+
	"					<div class=\"row\" >"+
	"						<div class=\"col s3 offset-s2\">"+
	"							<h6 class=\"green-text text-darken-1\">Radio selection type </h6>"+
	"						</div>"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<form class = \"green-text text-darken-1\" center action=\"#\" >"+
	"								<p>"+
	"									<input id=\"questionc"+k+"\" type=\"text\">"+
	"									<label for=\"questionc"+k+"\">Write the question</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecfirst"+k+"\" class=\"with-gap\" name=\"groupc"+k+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcfirst"+k+"\" type=\"text\">"+
	"									<label for=\"answcfirst"+k+"\">First answer</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecsecond"+k+"\" class=\"with-gap\" name=\"groupc"+k+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcsecond"+k+"\" type=\"text\">"+
	"									<label for=\"answcsecond"+k+"\">Second answer</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecthird"+k+"\" class=\"with-gap\" name=\"groupc"+k+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcthird"+k+"\" type=\"text\">"+
	"									<label for=\"answcthird"+k+"\">Third answer</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecfourth"+k+"\" class=\"with-gap\" name=\"groupc"+k+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcfourth"+k+"\" type=\"text\">"+
	"									<label for=\"answcfourth"+k+"\">Fourth answer</label>"+
	"								</p>"+
	"							</form>"+
	"						</div>"+
	"					</div>"+
	"				</div>";
	
				$('#append').append(befhtmltype + befhtmltextf + befhtmltruefalse + befhtmlradio);
				
				var currentQuestion = "#" + "textfield1"; //DB - type of the 
				var currentQuestionDiv = currentQuestion + "div"; 
				
				$(currentQuestion).prop("checked", true);
				$(currentQuestionDiv).show();
				
				questionNumb = k; // Zaenkrat še tukaj ne gre pripenjati dodatnih elementov
				
				//Moram še narediti za izbris in kako se podatki pojavijo na formi
				
				$(document).on("click",'input[name=questions'+k+']', function() {						
					var befinputValue = $(this).attr("id");
					var beftargetType = $("." + befinputValue);
					$(".type").not(beftargetType).hide();
					$(beftargetType).show();
					questionNumb = $(this).attr("name").substring(9);
				
				});
				
			}
			
			//Action when we click on button to append new question
			$(document).on("click","#btnappend",function() {
				++question;	
				var htmltype = "" +
	"			<div id=\"textfield"+question+"div\" class=\"row\" >"+
	"				<div class=\"col s3 offset-s2\">"+
	"					<h5 class=\"header green-text text-darken-1\">"+question+". question</h5>"+
	"				</div>"+
	"			</div>"+
	"			<div class=\"row\" >"+
	"				<div class=\"col s3 offset-s2\">"+
	"					<h6 class=\"green-text text-darken-1\">Choose the question type: </h6>"+
	"				</div>"+
	"			</div>"+
	"			<div class=\"row\" >"+
	"				<div class=\"col s8 offset-s2\">"+
	"					<form class = \"green-text text-darken-1\">"+
	"						<p>"+
	"						  <label>"+
	"							<input class=\"with-gap\" name=\"questions"+question+"\" type=\"radio\" id=\"textfield"+question+"\"/>"+
	"							<span>Text field question</span>"+
	"						  </label>"+
	"						</p>"+
	"						<p>"+
	"						  <label>"+
	"							<input class=\"with-gap\" name=\"questions"+question+"\" type=\"radio\" id=\"truefalse"+question+"\"/>"+
	"							<span>True, false question</span>"+
	"						  </label>"+
	"						</p>"+
	"						<p>"+
	"						  <label>"+
	"							<input class=\"with-gap\" name=\"questions"+question+"\" type=\"radio\" id=\"radio"+question+"\"/>"+
	"							<span>Radio question</span>"+
	"						  </label>"+
	"						</p>"+
	"					</form>"+
	"				</div>"+
	"			</div>";
			
			

				var htmltextf = "\n" + 
	"				<div id=\"textfield"+question+"div\" class=\"type textfield"+question+"\" hidden> "+ //example: textfield1,texfield43 
	"					<div class=\"row\">"+
	"						<div class=\"col s3 offset-s2\">"+
	"							<h6 class=\"green-text text-darken-1\">Text field type </h6>"+
	"						</div>"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<form id=\"textfieldform"+question+"\" class = \"green-text text-darken-1\" action=\"#\">"+
	"								<p>"+
	"									<input id=\"questiona"+question+"\" type=\"text\" required>"+  //example: questiona1, questiona43
	"									<label for=\"questiona"+question+"\">Write the question</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answafirst"+question+"\" class=\"text\" required>"+
	"									<label for=\"answafirst"+question+"\">First answer</label>"+
	"								</p>"+
						"			<div name=\"answadiv"+question+"\" id=\"answaseconddiv"+question+"\"  class=\"text\" hidden>"+
						"				<p class=\"z-depth-1\">"+
						"					<input id=\"answasecond"+question+"\">"+ 
						"					<label for=\"answasecond"+question+"\">Second answer</label>"+
						"				</p>"+
						"			</div>"+
	"								<div  name=\"answadiv"+question+"\" id=\"answathirddiv"+question+"\" class=\"text\" hidden>"+
			"							<p class=\"z-depth-1\">"+
					"						<input id=\"answathird"+question+"\">"+
					"						<label for=\"answathird"+question+"\">Third answer</label>"+
					"					</p>"+
					"				</div>"+

	"							</form>	"+
	"						</div>"+
	"					</div>"+
	"					<div class=\"row\">"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<a id=\"addanswa"+question+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">add</i>"+
	"							</a>"+
	"							<a id=\"hidanswa"+question+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">remove</i>"+
	"							</a>"+
	"						</div>"+
	"					</div>"+
	"				</div>";
	
				var htmltruefalse = "\n"+
					"<div id=\"truefalse"+question+"div\" class=\"type truefalse"+question+"\" hidden>"+  //example: truefalse1, truefalse43
	"					<div class=\"row\" >"+
	"						<div class=\"col s10 offset-s2\">"+
	"							<h6 class=\"green-text\">True, false type </h6>"+
	"						</div>"+
	"						<div class=\"col s6 offset-s2 center \" >"+
	"							<form class = \"green-text text-darken-1\" action=\"#\" >"+
	"								<p>"+
	"									<input id=\"questionb"+question+"\" type=\"text\" required>"+  //example: questionb1, questionb43
	"									<label for=\"questionb"+question+"\">Instructions about the multiple choice question</label>"+
	"								</p>"+
	"								</br>"+
	"								</br>"+
	"									<div class=\"switch\">"+
	"										<label>"+
	"										  False"+
	"										  <input id=\"truefalsebfirst"+question+"\" type=\"checkbox\">"+ 
	"										  <span class=\"lever green darken-1\"></span>"+
	"										  True"+
	"										</label>"+
	"									</div>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answbfirst"+question+"\" type=\"text\" required>"+ //example answbfirst1, answbfirst43
	"									<label for=\"answbfirst"+question+"\" >First answer</label>"+
	"								</p>"+
	"								</br>"+
	"								<div class=\"switch\">"+
	"									<label>"+
	"									  False"+
	"									  <input id=\"truefalsebsecond"+question+"\" type=\"checkbox\">"+ //example: truefalsebsecond1, truefalsebsecond43
	"									  <span class=\"lever green darken-1\"></span>"+
	"									  True"+
	"									</label>"+
	"								</div>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answbsecond"+question+"\" type=\"text\" required>"+
	"									<label for=\"answbsecond"+question+"\">Second answer</label>"+
	"								</p>"+
	"								</br>"+
	"								<div class=\"switch\">"+
	"									<label>"+
	"										 False"+
	"										 <input id=\"truefalsebthird"+question+"\" type=\"checkbox\">"+
	"										 <span class=\"lever green darken-1\"></span>"+
	"										 True"+
	"									</label>"+
	"								</div>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answbthird"+question+"\" type=\"text\" required>"+
	"									<label for=\"answbthird"+question+"\" >Third answer</label>"+
	"								</p>"+
	"								<div id=\"answbfourthdiv"+question+"\" hidden>"+  //example: answbfourthdiv1, answbfourthdiv43
		"								"+
		"								</br>"+
		"								<div class=\"switch\">"+
		"									<label>"+
		"										 False"+
		"										 <input id=\"truefalsebfourth"+question+"\" type=\"checkbox\">"+
		"										 <span class=\"lever green darken-1\"></span>"+
		"										 True"+
		"									</label>"+
		"								</div>"+
		"								<p class=\"z-depth-1\">"+
		"									<input id=\"answbfourth"+question+"\" type=\"text\">"+
		"									<label for=\"answbfourth"+question+"\">Fourth answer</label>"+
		"								</p>"+
	"								</div>"+
	"								<div id=\"answbfifthdiv"+question+"\" hidden>	"+
	"									</br>	"+
	"									<div class=\"switch\">"+
	"										<label>"+
	"										  False"+
	"										  <input id=\"truefalsebfifth"+question+"\" type=\"checkbox\">"+
	"										  <span class=\"lever green darken-1\"></span>"+
	"										  True"+
	"										</label>"+
	"									</div>"+
	"									<p class=\"z-depth-1\">"+
	"										<input id=\"answbfifth"+question+"\" type=\"text\">"+
	"										<label for=\"answbfifth"+question+"\">Fifth answer</label>"+
	"									</p>"+
	"								</div>"+
	"							</form>"+
	"						</div>"+
	"					</div>"+
	"					<div class=\"row\">"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<a id=\"addanswb"+question+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">add</i>"+
	"							</a>"+
	"							<a id=\"hidanswb"+question+"\" class=\"btn-floating btn-small waves-effect waves-light green darken-1\">"+
	"								<i class=\"material-icons\">remove</i>"+
	"							</a>"+
	"						</div>						"+
	"						</br>"+
	"					</div>"+
	"				</div>";
	
				var htmlradio = "\n"+
	"				<div id=\"radio"+question+"div\" class=\"type radio"+question+"\" hidden>"+
	"					<div class=\"row\" >"+
	"						<div class=\"col s3 offset-s2\">"+
	"							<h6 class=\"green-text text-darken-1\">Radio selection type </h6>"+
	"						</div>"+
	"						<div class=\"col s6 offset-s2 center\">"+
	"							<form class = \"green-text text-darken-1\" center action=\"#\" >"+
	"								<p>"+
	"									<input id=\"questionc"+question+"\" type=\"text\">"+
	"									<label for=\"questionc"+question+"\">Write the question</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecfirst"+question+"\" class=\"with-gap\" name=\"groupc"+question+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcfirst"+question+"\" type=\"text\">"+
	"									<label for=\"answcfirst"+question+"\">First answer</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecsecond"+question+"\" class=\"with-gap\" name=\"groupc"+question+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcsecond"+question+"\" type=\"text\">"+
	"									<label for=\"answcsecond"+question+"\">Second answer</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecthird"+question+"\" class=\"with-gap\" name=\"groupc"+question+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcthird"+question+"\" type=\"text\">"+
	"									<label for=\"answcthird"+question+"\">Third answer</label>"+
	"								</p>"+
	"								<p>"+
	"									<label>"+
	"										<input id=\"truefalsecfourth"+question+"\" class=\"with-gap\" name=\"groupc"+question+"\" type=\"radio\" />"+
	"										<span></span>"+
	"									</label>"+
	"								</p>"+
	"								<p class=\"z-depth-1\">"+
	"									<input id=\"answcfourth"+question+"\" type=\"text\">"+
	"									<label for=\"answcfourth"+question+"\">Fourth answer</label>"+
	"								</p>"+
	"							</form>"+
	"						</div>"+
	"					</div>"+
	"				</div>";
				

	
				$('#append').append(htmltype + htmltextf + htmltruefalse + htmlradio);
				
				
				/* Methods for adding or hiding answers from question type text field */
				$(document).on("click",'#addanswa'+question+'',function() {	showAnswTextFieldA(); });
					
				$(document).on("click",'#hidanswa'+question+'',function() {	hideAnswTextFieldA(); });
				
				
				/* Methods for adding or hiding answers from question type true false */
				$(document).on("click",'#addanswb'+question+'',function() {	showAnswTextFieldB(); });
					
				$(document).on("click",'#hidanswb'+question+'',function() {	hideAnswTextFieldB(); });
									

				$(document).on("click",'input[name=questions'+question+']', function() {						
					var inputValue = $(this).attr("id");
					var targetType = $("." + inputValue);
					$(".type").not(targetType).hide();
					$(targetType).show();
					questionNumb = $(this).attr("name").substring(9);
				
				});
			});	
		});

		</script>
		<script>
			
		</script>

	</body>
</html>