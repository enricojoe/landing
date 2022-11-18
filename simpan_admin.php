<?php 
	include 'koneksi.php';

	/* User's password. */
	$password = 'kaloiniADMIN2';
	/* Secure password hash. */
	$hash = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO admin (username, password) VALUES ('admin2', '$hash')";
	if(mysqli_query($connection, $sql)){
	    echo "Records inserted successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>