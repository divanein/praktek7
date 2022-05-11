<?php
$conn = mysqli_connect("localhost", "root", "", "pembukuan");
if (!$conn){
	die("Connection failed : ".mysqli_connect_error());
}

// membuat tabel di database pembukuan
$sql = "CREATE TABLE buku_tamu (
		ID_BT INT(10) PRIMARY KEY,
		NAMA VARCHAR(40) NOT NULL,
    	EMAIL VARCHAR(30) NOT NULL,
    	ISI varchar(50)
    )";

if (mysqli_query($conn, $sql)){
	echo "Tabel buku_tamu dibuat";
} else {
	echo "gagal membuat tabel buku_tamu : ".mysqli_error($conn);
}
mysqli_close($conn)
?>