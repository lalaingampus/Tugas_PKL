<?php 


   session_start();
  include "Proses/konek.php"; 
  
  if( !isset($_SESSION["login"])) {
      header("Location: login.php");
      exit;

  } 
 



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
     <link rel="stylesheet" href="aset/css/ac.css">
     <link rel="stylesheet" href="aset/css/garis.css">
     <link rel="stylesheet" href="aset/dp/dist/css/bootstrap-datepicker.css">
     <link rel="stylesheet" type="text/css" href="aset/DataTables/datatables.min.css"/>
    <!--<script type="text/javascript" src="aset/js/bootstrap.min.js"></script>-->
  	<script type="text/javascript" src="aset/js/jquery.js"></script>
	  <script type="text/javascript" src="aset/js/popper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="aset/fa/css/all.css"/>
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
          else if ($_GET['page'] == 'a'){
            include "halaman/input_transaksi.php";
          }
       
        ?> 
      </div>  
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
    $("#tgl, #tgl2, #tgl3").datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
    });
  </script>

  <!-- Memanggil jQuery.js -->
  <script src="aset/js/jquery-3.2.1.min.js"></script>

        <!-- Memanggil Autocomplete.js -->
  <script src="aset/js/jquery.autocomplete.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Selector input yang akan menampilkan autocomplete.
                $( "#cariapk" ).autocomplete({
                    serviceUrl: "source.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#cariapk" ).val("" + suggestion.apk);
                    }
                });
            })
        </script>

  <script type="text/javascript" src="aset/DataTables/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#datatables').DataTable();
    } );
  </script>
</body>
</html>


