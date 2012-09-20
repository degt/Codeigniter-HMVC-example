<?php

function get_header($method = 'index'){
	echo modules::run("general/header/".$method);
}

function get_footer($method = 'index'){
	echo modules::run("general/footer/".$method);
}

function get_menu($method = 'index'){
	echo modules::run("general/menu/".$method);
}

function is_logged_in(){
	return modules::run("users/_is_logged_in");	
}

?>