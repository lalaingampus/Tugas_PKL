<?php

include ("konek.php");

if(isset($_POST["submit"]))
{
    
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
    $fileLm = $_POST['fileLama'];
   
    if($_FILES['gambar']['error'] === 4) {
        $data = $fileLm;
    } else {
        $data = upload();
    }


    $sql = "UPDATE tb_transaksi SET No_Registrasi = '$no_reg', Tgl_Masuk = '$date', Tgl_Selesai = '$date1', aplikasi = '$apk', versi = '$ver', Tgl_Info = '$date2',  fitur = '$ftr', fungsi = '$fng', keterangan = '$ket', perubahan = '$prb', pengembangan = '$pgm', sysUpdate = '$update', data = '$fileLm' WHERE Kd_Transaksi = '$pk'";

	$query = mysqli_query( $conn, $sql);

	if( $query) {
    	header('Location:../index.php?status=gagal&page=lihat_transaksi');
	}
	else{
		header('Location: ../index.php?status=sukses&page=lihat_transaksi');
	}
} else {
    die("Akses dilarang ....");
}

?>
