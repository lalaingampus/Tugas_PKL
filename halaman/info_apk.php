<?php
$kd = $_GET['kode'];
$tsql = "Select tb_apk.*, tb_cluster.*, tb_login.*, tb_db.*, tb_ws.* from tb_cluster, tb_apk, tb_login, tb_db, tb_ws where tb_apk.KdCluster = tb_cluster.Kd_Cluster and tb_apk.KdDB = tb_db.Kd_DB and tb_apk.KdLogin = tb_login.Kd_Login and tb_apk.KdWS = tb_ws.Kd_WebSrv and Kd_Apk = '$kd'";
//$conn = mysqli_connect( $serverName, $connectionInfo);
$query = mysqli_query($conn, $tsql);
$apk = mysqli_fetch_array($query);



?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Aplikasi</a>
  </li>
  <li class="breadcrumb-item">
  	<a href="index.php?page=lihat_apk">Daftar Aplikasi </a>
  </li>
  <li class="breadcrumb-item active">Info Aplikasi</li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
    Info Aplikasi : <?php echo $apk['Nm_Apk'] ?>
   </div> 
  <div class="card-body">
	<div class="row">
	  <div class="offset-lg-2 col-lg-8 col-sm-6 col-12 main-section text-center">
	     <div class="row">
	        <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
	      </div>
	      <div class="row user-detail">
	        <div class="col-lg-12 col-sm-12 col-12">
	          <img src="Gambar/default.jpg" class="rounded-circle img-thumbnail">
	          <h5><?php echo $apk['Nm_Apk']." - ".$apk['Kd_Apk'] ?></h5>
	          <table align="center" border="0" class="small">
	            <tr align="center">
	              <td width="200px"><p><i class="fa fa-database"></i> <a href ="#"><?php echo $apk['Nm_DB']; ?><a></p></td>
	              <td width="200px"><p><i class="fa fa-folder"></i> <a href ="#"><?php echo $apk['Nm_Cluster']; ?><a></p></td>
	            </tr>
	            <tr align="center">
	              <td width="200px"><p><i class="fa fa-globe"></i> <a href ="#"><?php echo $apk['Nm_WebSrv']; ?><a></p></td>
	              <td width="200px"><p><i class="fa fa-id-card"></i> <a href ="#"><?php echo $apk['Nm_Login']; ?><a></p></td>
	            </tr>    
	          </table>
	          <hr>
	          <table align="center" border="0">
	              <tr width="400px"><h6>IP Aplikasi : <?php echo $apk['IP_Apk']; ?></h6></tr>
	              <tr width="400px" colspan="3"><h6>Tanggal GoLive : <?php echo $apk['Tgl_Golive_Apk']; ?></h6></tr>
	              <tr width="400px"><h6>Status : <div class="<?php echo ($apk['Sts_Apk'] == 'Aktif') ? "badge badge-success": "badge badge-danger"?>"> <?php echo ($apk['Sts_Apk'] == 'Aktif') ? "Aktif": "Tidak Aktif"?></span></div></h6></tr>
	          </table>  
	          <hr>
	          <h6>Fungsi : </h6>
	          <span><?php echo $apk['Fungsi_Apk']; ?></span>
	        </div>
	      </div>
	      <hr>
	      <a href="?page=edit_apk&kode=<?php echo $apk['KodeAplikasi'] ?>" class ="btn btn-outline-primary btn-block  fa fa-edit" > Edit </a>
	      <a href='Proses/proses-hapusapk.php?kode=<?php echo $apk['KodeAplikasi'] ?> ' class = "btn btn-outline-danger btn-block fa fa-trash"  onclick="return confirm('Hapus data?');"> Hapus</a>
	      <hr>
	    </div>
	 </div>
</div>
