<?php

include "konek.php";

if (isset($_POST['submit'])){
	$pk = $_POST['kodepk'];
	$kode_apk = $_POST['kode'];
    $nm = $_POST['nama'];
    $ip = $_POST['ip'];
    $url = $_POST['url'];
    //$date = DateTime::createFromFormat('d/m/Y',);
    //$date = $date->format('d-m-Y');
    $date = date('y-m-d', strtotime( $_POST['tgl']));
    //$tgl = $_POST['tgl'];
    $db = $_POST['db'];
    $ws = $_POST['ws'];
    $lg = $_POST['lg'];
    $cl = $_POST['cl'];
    $st = $_POST['status'];
    $fs = $_POST['fungsi'];
	$tsql = "Update TB_Apk set Nm_Apk = '$nm', KdCluster='$cl', IP_Apk = '$ip', Sts_Apk = '$st', URL_Apk = '$url', Fungsi_Apk = '$fs', KdDB = '$db', KdWS = '$ws', KdLogin = '$lg', Tgl_GoLive_Apk = '$date' where Kd_Apk = '$pk'";

	$stmt = mysqli_query( $conn, $tsql);

	if( $stmt === false ) {
    	echo "Error in executing query.</br>";
    	die( print_r( mysqli_errors(), true));
    	header('location:../index.php');
	}
	else{
		header('location:../index.php?status=sukses&page=lihat_apk');
	}
	mysqli_free_stmt( $stmt);
	mysqli_close( $conn);
}
