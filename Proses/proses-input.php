<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $kd_clust = $_POST['kode_cluster'];
    $nm_clust = $_POST['nama_cluster'];
    $st = $_POST['status'];
    //$ket=$_POST['keterangan'];
    // buat query
    $sql= "Insert into tb_cluster values('$kd_clust','$nm_clust','$st')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php?status=sukses&page=lihat_cluster');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../index.php?status=gagal&page=lihat_cluster');
    }


} else {
    die("Akses dilarang...");
}

?>