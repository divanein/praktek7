<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn){
	die("Connection failed : ".mysqli_connect_error());
}
$sql = "create database DBpegawai";

if (mysqli_query($conn, $sql)){
	echo "Database DBpegawai berhasil dibuat";
} else {
	echo "gagal membuat database : ".mysqli_error($conn);
}

mysqli_close($conn)
?>