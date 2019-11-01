

<?php

include "konek.php";
	$pk = $_POST['kodepk'];
	$kd = $_POST['kode'];
	$nm= $_POST['nama_clust'];
	$st = $_POST['stat'];
	$ket=$_POST['keterangan'];
	$tsql = "Update tb_cluster set Nm_Cluster = '$nm', Sts_Cluster='$st' where Kd_Cluster = '$pk'";

	$stmt = mysqli_query( $conn, $tsql);

	if( $stmt === false ) {
    	echo "Error in executing query.</br>";
    	die( print_r( sqlsrv_errors(), true));
	}
	else{
		header('location:../index.php?status=sukses&page=read_a');
	}
	sqlsrv_free_stmt( $stmt);
	sqlsrv_close( $conn);
