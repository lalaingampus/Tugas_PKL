<?php

include "konek.php";

if (isset($_POST['submit'])){
	$pk = $_POST['kodepk'];
	//$kd = $_POST['kode'];
	$nm= $_POST['nama_lg'];
	$tsql = "Update tb_login set Nm_Login = '$nm' where Kd_Login = '$pk'";

	$stmt = mysqli_query( $conn, $tsql);

	if( $stmt === false ) {
    	echo "Error in executing query.</br>";
    	die( print_r( sqlsrv_errors(), true));
    	header('location:../index.php');
	}
	else{
		header('location:../index.php?status=sukses&page=lihat_login');
	}
	sqlsrv_free_stmt( $stmt);
	sqlsrv_close( $conn);
}
