<?php

function validate_email_regex($email){

	if(preg_match("/^^([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9\.\_\-])*@([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9\.\_\-])*.([a-zA-Z])([a-zA-Z])([a-zA-Z])*$/", $email)){
		return true;
	}
	return false;
}

function validate_form_signup($usuario, $password, $firstname, $lastname, $email){
	$errores = array();
	// Campos obligatorios.
    if($usuario == ''){
        $errores[] = "El usuario es requerido";
    }
    if($password = '' || strlen($password) < 5){
        $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres:";
    }
    if($firstname == ''){
        $errores[] = "El nombre es requerido";
    }
    if($lastname == ''){
        $errores[] = "El apellido es requerido";
    }
    // El email es obligatorio y ha de tener formato adecuado.
    if(!validate_email_regex($email) || $email == ''){
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }
    return $errores;
}







/* BBDD */
function create_user(){
	return true;
}

?>