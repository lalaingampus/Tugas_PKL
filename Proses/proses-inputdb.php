<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $kd = $_POST['kode_db'];
    $nm = $_POST['nama_db'];
    $ip = $_POST['ip_db'];
    // buat query
    $sql= "Insert into tb_db values('$kd','$nm','$ip')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ../index.php?status=sukses&page=lihat_db');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../index.php?status=gagal&page=lihat_db');
    }


} else {
    die("Akses dilarang...");
}

?>