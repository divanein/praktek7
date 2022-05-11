<?php
$conn = mysqli_connect("localhost", "root", "", "DBpegawai");
if (!$conn){
	die("Connection failed : ".mysqli_connect_error());
}
// membuat tabel departemenPegawai di database pembukuan
$sql = "CREATE TABLE departemenPegawai (
		ID_DEPARTEMEN VARCHAR(10) PRIMARY KEY,
		NAMA_DEPARTEMEN VARCHAR(40) NOT NULL
    )";

if (mysqli_query($conn, $sql)){
	echo "Tabel departemenPegawai dibuat";
} else {
	echo "gagal membuat tabel departemenPegawai: ".mysqli_error($conn);
}
mysqli_close($conn)
?>