<?php

function validate_email_regex($email){

	if(preg_match("/^([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9\.\_\-])*@([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9])([a-zA-Z0-9\.\_\-])*.([a-zA-Z])([a-zA-Z])([a-zA-Z])*$/", $email)){
		return true;
	}
	return false;
}

function validate_password_regex($password){

	if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&_])([A-Za-z\d$@$!%*?&]|[^ ]){5,10}$/", $password)){
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
    if(!validate_password_regex($password) || $password = ''){
        $errores[] = "La contraseña es requerida y ha de ser mayor a 5 y menor a 10 caracteres, debe contener al menos 1 letra minuscula, 1 letra mayuscula, 1 digito, 1 caracter especial y sin espacios en blanco";
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


/* Tratamiento BBDD */

function conect_bbdd(){
	$conexion = mysqli_connect("localhost", "root", "", "dsi") or
    	die("Problemas con la conexión");

    return $conexion;
}

function disconect_bbdd($conexion){
	mysqli_close($conexion);
}

function create_user($usuario, $password, $firstname, $lastname, $email){
	$conexion = conect_bbdd();

	mysqli_query($conexion, "insert into User(Usu_name,Usu_pass,Usu_firstname,Usu_lastname,Usu_email) values ('$usuario','$password','$firstname','$lastname','$email')") or
  		die("Problemas en el select".mysqli_error($conexion));

	disconect_bbdd($conexion);
	return true;
}

?>