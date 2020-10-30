<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'c1960018_trabajo';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Ocurrio un error al conectarse al servidor mysql');
	//mysqli_select_db($dbname);

	error_reporting(0);

	/*$dbhost = 'localhost';
	$dbuser = 'c1960018_trabajo';
	$dbpass = 'VEfimezo58';
	$dbname = 'c1960018_trabajo';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Ocurrio un error al conectarse al servidor mysql');
	//mysql_select_db($dbname);

	error_reporting(0);*/

?>