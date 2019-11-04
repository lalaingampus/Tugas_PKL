<?php

include("konek.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    var_dump($_POST);
                
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

    $allow = array('pdf','doc','docx');
    $data = $_FILES['file']['name'];
    $extension = explode('.', $data);
    $key = strtolower(end($extension));
    $size = $_FILES['file']['size'];
    $lokasi = $_FILES['file']['tmp_name'];

    if(in_array($key, $allow) === true ) {
        if($size < 5000000) {
            move_uploaded_file($lokasi, 'files/'.$data);
            $sql = "INSERT INTO tb_transaksi VALUES(null, '$no_reg', '$date', '$date1', '$apk', '$ver', '$date2','$ftr', '$fng', '$ket', '$prb', '$pgm', '$update', '$data')";
            $query = mysqli_query($conn, $sql);
            if($query) {
                echo "data berhasil diupload";
                header('Location: ../index.php?status=sukses&page=lihat_transaksi');
             } else {
                echo "data gagal diupload";
                header('Location: ../index.php?status=gagal&page=lihat_transaksi');
            }
        } else {
            echo 'Ukuran file terlalu besar';
        }
    } else {
        echo "extensi file tidak diperbolehkan";
    }
} else {
    die("Akses dilarang...");
}

?>