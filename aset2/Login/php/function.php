<?php

$koneksi = mysqli_connect("localhost","root","","bpjs_db");

function registrasi($data) {
	global $koneksi;



	$name = strtolower(stripcslashes($data["name"]));
	$email = strtolower(stripcslashes($data["email"]));
	$pass = mysqli_real_escape_string($koneksi,$data["pass"]);
	$pass2 = mysqli_real_escape_string($koneksi,$data["re_pass"]);

	// cek apakah akun sudah terdaftar
	$result = mysqli_query($koneksi, "SELECT email FROM tb_pengguna WHERE email = '$email'");
	if( mysqli_fetch_assoc($result)) {
		echo "<script>alert('data sudah ada');</script>";
		return false;
	}

	// cek konfirmasi password
	if($pass !== $pass2) {
		echo "<script>alert('Password Salah');</script>";
		return false;
	}

	$pass = password_hash($pass, PASSWORD_DEFAULT);
	mysqli_query($koneksi, "INSERT INTO tb_pengguna VALUES('', '$name', '$email', '$pass')");	
	return mysqli_affected_rows($koneksi);
}