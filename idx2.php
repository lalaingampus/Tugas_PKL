<?php include "Proses/konek.php"; 
  if(isset($_GET['page'])){
  }
  else{
    $_GET['page'] = '';
  }

  if(isset($_GET['status'])){
  }
  else{
    $_GET['status'] = '';
  }

//Page

?>
<!DOCTYPE html>
<html>
<head>
  <title>Bismillah</title>
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="aset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="aset/css/style.css">
     <link rel="stylesheet" href="aset/css/style2.css">
     <link rel="stylesheet" href="aset/css/garis.css">
     <link rel="stylesheet" href="aset/dp/dist/css/bootstrap-datepicker.css">
     <link rel="stylesheet" type="text/css" href="aset/DataTables/datatables.min.css"/>
    <!--<script type="text/javascript" src="aset/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="aset/js/jquery.js"></script>
    <script type="text/javascript" src="aset/js/popper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" integrity="sha256-piqEf7Ap7CMps8krDQsSOTZgF+MU/0MPyPW2enj5I40=" crossorigin="anonymous" />
</head>

<body>
<?php include"Tampil/navbar.php" ?>
<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
        <?php 
        //if ($_GET['page'] != '')
          include "Tampil/sidebar.php" 
        ?>
      </div>

      <div class="col-10">
        <?php

         //Alret
          if($_GET['status'] == 'sukses')
          {
            include "Tampil/alret_sukses.php";
          }
          else if($_GET['status'] == 'gagal')
          {
            include "Tampil/alret_gagal.php";
          }


          if ($_GET['page'] == ''){
            include "halaman/Daftar_Aplikasi.php";
          }
          else if($_GET['page'] == 'home'){
            include "halaman/Daftar_Aplikasi.php";
          }
          //cluster
          else if($_GET['page'] == 'lihat_cluster'){
            include "halaman/daftar_cluster.php";
          }
          else if ($_GET['page'] == 'input_cluster'){
            include "halaman/input_cluster.php";
          }
          else if ($_GET['page'] == 'edit_cluster'){
            include "halaman/edit_cluster.php";
          }
          //aplikasi
          else if ($_GET['page'] == 'lihat_apk'){
            include "halaman/Daftar_Aplikasi.php";
          }
          else if ($_GET['page'] == 'info_apk'){
            include "halaman/info_apk.php";
          }
          else if ($_GET['page'] == 'input_apk'){
            include "halaman/input_aplikasi.php";
          }
          else if ($_GET['page'] == 'edit_apk'){
            include "halaman/edit_aplikasi.php";
          }
          //database
          else if ($_GET['page'] == 'input_db'){
            include "halaman/input_db.php";
          }
          else if ($_GET['page'] == 'lihat_db'){
            include "halaman/daftar_db.php";
          }
          else if ($_GET['page'] == 'edit_db'){
            include "halaman/edit_db.php";
          }
          //Web Server
          else if ($_GET['page'] == 'input_websrv'){
            include "halaman/input_websrv.php";
          }
          else if ($_GET['page'] == 'lihat_websrv'){
            include "halaman/daftar_webserver.php";
          }
          else if ($_GET['page'] == 'edit_websrv'){
            include "halaman/edit_webserv.php";
          }
          //Login
          else if ($_GET['page'] == 'input_login'){
            include "halaman/input_login.php";
          }
          else if ($_GET['page'] == 'lihat_login'){
            include "halaman/daftar_login.php";
          }
          else if ($_GET['page'] == 'edit_login'){
            include "halaman/edit_login.php";
          }
          //coba2
          else if ($_GET['page'] == 'q'){
            include "halaman/qq.php";
          }
       
        ?> 
        <footer class="page-footer font-small">
        <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> PJX.com</a>
          </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </div>
    </div>
  </div>
  <script src="aset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="aset/dp/dist/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    $("#tgl").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
  </script>
  <script type="text/javascript" src="aset/DataTables/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#datatables').DataTable();
    } );
  </script>
  <!-- Memanggil jQuery.js -->
        <script src="aset/js/jquery-3.2.1.min.js"></script>

        <!-- Memanggil Autocomplete.js -->
        <script src="aset/js/jquery.autocomplete.min.js"></script>
  <script type="text/javascript">
            $(document).ready(function() {
                // Data yang ditamilkan pada autocomplete.
                var buah = [
                    { value: 'Anggur', data: 'Anggur' },
                    { value: 'Apple', data: 'Apple' },
                    { value: 'Jeruk', data: 'Jeruk' },
                    { value: 'Mangga', data: 'Mangga' },
                    { value: 'Melon', data: 'Melon' },
                    { value: 'Manggis', data: 'Manggis' },
                    { value: 'Nanas', data: 'Nanas' },
                    { value: 'Semangka', data: 'Semangka' },
                    { value: 'Durian', data: 'Durian' },
                    { value: 'Peer', data: 'Peer' },
                    { value: 'Alpukat', data: 'Alpukat' },
                    { value: 'Nangka', data: 'Nangka' },
                    { value: 'Pepaya', data: 'Pepaya' },
                    { value: 'Sawo', data: 'Sawo' },
                    { value: 'Salak', data: 'Salak' },
                    { value: 'Pisang', data: 'Pisang' },
                    { value: 'Klengkeng', data: 'Klengkeng' },
                    { value: 'Rambutan', data: 'Rambutan' }
                ];

                // Selector input yang akan menampilkan autocomplete.
                $( "#buah" ).autocomplete({
                    lookup: buah
                });
            })
        </script>
</body>
</html>


