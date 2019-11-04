<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $kd_apk = $_POST['kode'];
    $nm_apk = $_POST['nama'];
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
    // buat query
    $sql= "Insert into tb_apk values('$kd_apk','$nm_apk', '$st', '$fs', '$url', '$date', '$ip','$cl', '$db', '$ws', '$lg')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php?status=sukses&page=lihat_apk');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        //echo "Error in executing query.</br>";
        //die( print_r( sqlsrv_errors(), true));
        header('Location: ../index.php?status=gagal&page=lihat_apk');
    }


} else {
    die("Akses dilarang...");
}

?>