<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $kd = $_POST['kode_ws'];
    $nm = $_POST['nama_ws'];
    // buat query
    $sql= "Insert into tb_ws values('$kd','$nm')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php?status=sukses&page=lihat_websrv');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../index.php?status=gagal&page=lihat_webserv');
    }


} else {
    die("Akses dilarang...");
}

?>