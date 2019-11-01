<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $no_reg = $_POST['no_reg'];
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

    // buat query
    $sql = "INSERT INTO tb_transaksi VALUES(null, '$no_reg', '$date', '$date1', '$apk', '$ver', '$date2','$ftr', '$fng', '$ket', '$prb', '$pgm', '$update')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php?status=sukses&page=lihat_transaksi');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        //echo "Error in executing query.</br>";
        //die( print_r( sqlsrv_errors(), true));
        header('Location: ../index.php?status=gagal&page=lihat_transaksi');
    }


} else {
    die("Akses dilarang...");
}

?>