<?php 
	include 'koneksi.php';

	$sql = "INSERT INTO data_pengunjung (no_telp) VALUES ('".$_POST['no_telp']."')";
		var_dump($_REQUEST);
		var_dump($_POST);
	if(mysqli_query($connection, $sql)){
	    echo "Records inserted successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>