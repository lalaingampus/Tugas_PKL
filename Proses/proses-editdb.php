<?php

include "konek.php";

if (isset($_POST['submit'])){
	$pk = $_POST['kodepk'];
	//$kd = $_POST['kode'];
	$nm= $_POST['nama_db'];
	$ip = $_POST['ip'];
	$tsql = "Update tb_db set Nm_DB = '$nm', IP_DB='$ip' where Kd_DB = '$pk'";

	$stmt = mysqli_query( $conn, $tsql);

	if( $stmt === false ) {
    	echo "Error in executing query.</br>";
    	die( print_r( sqlsrv_errors(), true));
    	header('location:../index.php');
	}
	else{
		header('location:../index.php?status=sukses&page=lihat_db');
	}
	sqlsrv_free_stmt( $stmt);
	sqlsrv_close( $conn);
}
