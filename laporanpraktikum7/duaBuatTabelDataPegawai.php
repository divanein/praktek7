<?php
$conn = mysqli_connect("localhost", "root", "", "DBpegawai");
if (!$conn){
	die("Connection failed : ".mysqli_connect_error());
}
// membuat tabel dataPegawai di database pembukuan
$sql = "CREATE TABLE dataPegawai (
		ID_PEGAWAI VARCHAR(10) PRIMARY KEY,
		NAMA VARCHAR(40) NOT NULL,
    	ALAMAT VARCHAR(50) NOT NULL,
    	ID_DEPARTEMEN VARCHAR(10),
    	FOREIGN KEY (ID_DEPARTEMEN) REFERENCES departemenPegawai(ID_DEPARTEMEN)
    )";

if (mysqli_query($conn, $sql)){
	echo "Tabel dataPegawai dibuat";
} else {
	echo "gagal membuat tabel dataPegawai: ".mysqli_error($conn);
}
mysqli_close($conn)
?>