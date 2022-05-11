<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn){
	die("Connection failed : ".mysqli_connect_error());
}
$sql = "create database pembukuan";

if (mysqli_query($conn, $sql)){
	echo "Database pembukuan berhasil dibuat";
} else {
	echo "gagal membuat database : ".mysqli_error($conn);
}

mysqli_close($conn)
?>