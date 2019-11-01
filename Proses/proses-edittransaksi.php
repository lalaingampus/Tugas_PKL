<?php

include "konek.php";

if (isset($_POST['submit'])){
	$pk = $_POST['kode'];
	//$kd = $_POST['kode'];
	$no_reg = $_POST['noreg'];
    $apk = $_POST['aplikasi'];
    $ver = $_POST['versi'];
    //$date = DateTime::createFromFormat('d/m/Y',);
    //$date = $date->format('d-m-Y');
    $date = date('y-m-d', strtotime( $_POST['tgl_masuk']));
    $date1 = date('y-m-d', strtotime( $_POST['tgl_selesai']));
    $date2 = date('y-m-d', strtotime( $_POST['tgl_info']));
    //$tgl = $_POST['tgl'];
    $ftr = $_POST['fitur'];
    $fng = $_POST['fungsi'];
    $ket = $_POST['keterangan'];
    $pgm = $_POST['pengembangan'];
    $prb = $_POST['perubahan'];
    $update = $_POST['sysUpdate'];


	$tsql = "Update tb_transaksi set No_Registrasi = '$no_reg', Tgl_Masuk = '$date', Tgl_Selesai = '$date1', aplikasi = '$apk', versi = '$ver', Tgl_Info = '$date2',  fitur = '$ftr', fungsi = '$fng', keterangan = '$ket', perubahan = '$prb', pengembangan = '$pgm', sysUpdate = '$update' where Kd_Transaksi = '$pk'";

	$stmt = mysqli_query( $conn, $tsql);

	if( $stmt === false ) {
    	echo "Error in executing query.</br>";
    	die( print_r( sqlsrv_errors(), true));
    	header('location:../index.php');
	}
	else{
		header('location:../index.php?status=sukses&page=lihat_transaksi');
	}
	sqlsrv_free_stmt( $stmt);
	sqlsrv_close( $conn);
}
