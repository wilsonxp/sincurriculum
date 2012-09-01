<?php
function conectar(){
	$host="localhost";
	$user="sincurriculum";
	$password="sincurriculumm";

	$link = mysql_connect ($host, $user, $password);
	if($link){
		echo "Se conecto";
	}
	else{
		echo "No se conecto";
	}
}
?>