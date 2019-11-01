<?php
include "konek.php";
/*$serverName = "LENOVO-PC\SQLEXPRESS"; //serverName\instanceName
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"DBProject");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

/*if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/
$kd = $_GET['kode'];

/*$tsql2 = "Delete tb_apk where KdCluster = '$kd'";
$stmt2 = mysqli_query( $conn, $tsql2);*/
$sql = "DELETE FROM tb_cluster WHERE Kd_Cluster='$kd'";
$query = mysqli_query($conn, $sql);
//$stmt = mysqli_query( $conn, $tsql);

/*if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( sqlsrv_errors(), true));
}
else{
	header('location:../index.php?status=sukses&page=read_a');
} */

if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: ../index.php?status=sukses&page=lihat_cluster');
} 
else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: ../index.php?status=gagal&page=lihat_cluster');
}

sqlsrv_free_stmt( $stmt);
sqlsrv_free_stmt( $stmt2);
sqlsrv_close( $conn);

