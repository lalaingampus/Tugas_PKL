<?php include "Proses/konek.php"; 
  if(isset($_GET['page'])){
  }
  else{
    $_GET['page'] = '';
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar Bootsrap!</title>
	
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="aset/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="aset/css/style.css">
     <link rel="stylesheet" href="aset/css/style2.css">
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
        <?php include "Tampil/sidebar.php" ?>
			</div>

			<div class="col-10">
        <div class="alert alert-danger alert-dismissible fade show">
  <strong>Kamu!</strong> Ini contoh alert dengann tombol close.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
				<?php
          if ($_GET['page'] == ''){
            include "halaman/halaman_utama.php";
          }
          else if($_GET['page'] == 'lihat_cluster'){
            include "halaman/daftar_cluster.php";
          }
          else if ($_GET['page'] == 'input_cluster'){
            include "halaman/input_cluster.php";
          }
          else if ($_GET['page'] == 'lihat_apk'){
            include "halaman/Daftar_Aplikasi.php";
          }
          else if ($_GET['page'] == 'input_apk'){
            include "halaman/input_aplikasi.php";
          }
          else if ($_GET['page'] == 'edit_apk'){
            include "halaman/edit_aplikasi.php";
          }
          else if ($_GET['page'] == 'edit_cluster'){
            include "halaman/edit_cluster.php";
          }
          else if ($_GET['page'] == 'input_db'){
            include "halaman/input_db.php";
          }
          else if ($_GET['page'] == 'input_websrv'){
            include "halaman/input_websrv.php";
          }
          else if ($_GET['page'] == 'input_login'){
            include "halaman/input_login.php";
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
</body>
</html>


