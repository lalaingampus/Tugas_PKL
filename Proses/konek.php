<?php
// $serverName = "LENOVO-PC\SQLEXPRESS"; //serverName\instanceName
// // Since UID and PWD are not specified in the $connectionInfo array,
// // The connection will be attempted using Windows Authentication.
// $connectionInfo = array( "Database"=>"DBProject");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);

// /*if( $conn ) {
//      echo "Connection established.<br />";
// }else{
//      echo "Connection could not be established.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }*/
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "bpjs";

$conn = mysqli_connect($server, $user, $password, $nama_database);

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

function register($data) {
	global $conn;

	$username = strtolower(stripslashes($data['Nm_Login']));
	$email = strtolower(stripslashes($data['Eml_Login']));
	$password = mysqli_real_escape_string($conn, $data['Pass_Login']);
	$confirm = mysqli_real_escape_string($conn, $data['Copass_Login']);

	// Cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT Eml_Login FROM tb_regis WHERE Eml_Login = '$email'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>alert('user telah terdaftar');</script>";
		return false;
	}


	// Cek konfirmasi Password
	if($password !== $confirm) {
		echo "<script>alert('Konfirmasi Password Salah');</script>";
		return false;
	}

	// enskripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// Tambah userbaru ke database
	mysqli_query($conn, "INSERT INTO tb_regis VALUES(null,'$username','$email','$password')");
	return mysqli_affected_rows($conn);	
}

?>