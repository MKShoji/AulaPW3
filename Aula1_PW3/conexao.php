<?php
	$servidor="localhost";
	$banco="bdpw3";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);		
?>