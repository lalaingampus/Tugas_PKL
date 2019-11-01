<?php

include "konek.php";

if (isset($_POST['submit'])){
	$pk = $_POST['kodepk'];
	//$kd = $_POST['kode'];
	$nm= $_POST['nama_ws'];
	$tsql = "Update tb_ws set Nm_WebSrv = '$nm' where Kd_WebSrv = '$pk'";

	$stmt = mysqli_query( $conn, $tsql);

	if( $stmt === false ) {
    	echo "Error in executing query.</br>";
    	die( print_r( sqlsrv_errors(), true));
    	header('location:../index.php');
	}
	else{
		header('location:../index.php?status=sukses&page=lihat_websrv');
	}
	sqlsrv_free_stmt( $stmt);
	sqlsrv_close( $conn);
}
