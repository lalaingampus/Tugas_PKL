<?php
include "konek.php";

$kd = $_GET['kode'];

$sql = "DELETE FROM tb_db WHERE Kd_DB='$kd'";
$query = mysqli_query($conn, $sql);


/*if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( sqlsrv_errors(), true));
    header('Location: ../index.php?status=gagal');
}
else{
	header('Location: ../index.php?status=sukses');
}*/

if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: ../index.php?status=sukses&page=lihat_db');
} 
else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    echo "Error in executing query.</br>";
    	die( print_r( sqlsrv_errors(), true));
    header('Location: ../index.php?status=gagal&page=lihat_db');
}

sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);