<?php
	$server="localhost";
	$user="root";
	$pass="";
	$database="Inventory";

	$koneksi = mysqli_connect($server,$user,$pass,$database);
	if(!$koneksi){
		die("Failed to connect MySQL: " . 
			mysqli_connect_error());
	}
	else{
    echo " ";
}
?>