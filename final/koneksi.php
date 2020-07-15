<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'db_mhs';


	$conn = mysqli_connect($host, $user, $pass, $db);

	if (!$conn) {
		echo 'Error : '.mysql_insert_error($conn);
	}
 ?>