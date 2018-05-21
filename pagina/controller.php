
<?php

function foo($email){

	if(preg_match("/^^([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9\.\_\-])*@([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9\.\_\-])*.([a-zA-Z])([a-zA-Z])([a-zA-Z])*$/", $email)){
    	return true;
  	}
  	return false;
}

?>