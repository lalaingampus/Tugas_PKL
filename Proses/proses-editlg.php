<?php

include "konek.php";

if (isset($_POST['submit'])){
	$pk = $_POST['kodepk'];
	//$kd = $_POST['kode'];
	$nm= $_POST['nama_lg'];
	$em= $_POST['eml_lg'];
	$status= $_POST['level'];

	$tsql = "UPDATE tb_regis SET Nm_Login = '$nm', Eml_Login = '$em', user_type = '$status' WHERE Kd_Login = '$pk'";

	$stmt = mysqli_query( $conn, $tsql);

	if( $stmt  ) {
    	header('location:../index.php?status=sukses&page=lihat_login');;
	}
	else{
		header('location:../index.php?status=gagal&page=lihat_login');
	}
}

?>
	
