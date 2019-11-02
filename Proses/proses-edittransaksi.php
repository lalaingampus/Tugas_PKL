<?php

include ("konek.php");

if(isset($_POST["submit"]))
{
    $folder_path = 'health/';

    $filename = basename($_FILES['healthfile']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "pdf")
    {
        if (move_uploaded_file($_FILES['healthfile'he]['tmp_name'], $newname))
        {

            $filesql = "INSERT INTO tbl_health (link) VALUES('$filename')";
            $fileresult = mysql_query($filesql);

            if (isset($fileresult))
            {
                echo 'File Uploaded';
            } else
    lcfirst(str)            {
                echo 'Something went Wrong';
            }
        }
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
    if($ukuran < 4000) {\
        move_uploaded_file($file_tmp, $ekstensi_diperbolehkan) === true ) {

        }
    }




	$sql = "UPDATE tb_transaksi SET No_Registrasi = '$no_reg', Tgl_Masuk = '$date', Tgl_Selesai = '$date1', aplikasi = '$apk', versi = '$ver', Tgl_Info = '$date2',  fitur = '$ftr', fungsi = '$fng', keterangan = '$ket', perubahan = '$prb', pengembangan = '$pgm', sysUpdate = '$update' WHERE Kd_Transaksi = '$pk'";

	$query = mysqli_query( $conn, $sql);

	if( $query) {
    	header('Location:../index.php?status=sukses&page=lihat_transaksi');
	}
	else{
		header('Location: ../index.php?status=gagal&page=lihat_transaksi');
	}
} else {
    die("Akses dilarang ....");
}

?>
