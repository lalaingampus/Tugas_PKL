<?php 
if(isset($_GET['head'])){
  $hd = $_GET['head'];
  $hdn = $_GET['nama'];
  if($_GET['type'] == 'cluster'){
    $tsql = "Select tb_apk.*, tb_cluster.*, tb_login.*, tb_db.*, tb_ws.* from tb_cluster, tb_apk, tb_login, tb_db, tb_ws where tb_apk.KdCluster = tb_cluster.Kd_Cluster and tb_apk.KdCluster='$hd' and tb_apk.KdDB = tb_db.Kd_DB and tb_apk.KdLogin = tb_login.Kd_Login and tb_apk.KdWS = tb_ws.Kd_WebSrv";
  }
  else if ($_GET['type'] == 'db'){
    $tsql = "Select tb_apk.*, tb_cluster.*, tb_login.*, tb_db.*, tb_ws.* from tb_cluster, tb_apk, tb_login, tb_db, tb_ws where tb_apk.KdCluster = tb_cluster.Kd_Cluster and tb_apk.KdDB = tb_db.Kd_DB  and tb_apk.KdDB = '$hd' and tb_apk.KdLogin = tb_login.Kd_Login and tb_apk.KdWS = tb_ws.Kd_WebSrv";
  }
  else if ($_GET['type'] == 'login'){
    $tsql = "Select tb_apk.*, tb_cluster.*, tb_login.*, tb_db.*, tb_ws.* from tb_cluster, tb_apk, tb_login, tb_db, tb_ws where tb_apk.KdCluster = tb_cluster.Kd_Cluster and tb_apk.KdLogin = tb_login.Kd_Login  and tb_apk.KdDB =  tb_db.Kd_DB and tb_apk.KdLogin = '$hd' and tb_apk.KdWS = tb_ws.Kd_WebSrv";
  }
  else if ($_GET['type'] == 'ws'){
    $tsql = "Select tb_apk.*, tb_cluster.*, tb_login.*, tb_db.*, tb_ws.* from tb_cluster, tb_apk, tb_login, tb_db, tb_ws where tb_apk.KdCluster = tb_cluster.Kd_Cluster and tb_apk.KdWS = tb_ws.Kd_WebSrv  and tb_apk.KdDB =  tb_db.Kd_DB and tb_apk.KdLogin = tb_login.Kd_Login and tb_apk.KdWS = '$hd'";
  }
}
else{
$_GET['head'] ="";
$hdn = "";
$tsql = "Select tb_apk.*, tb_cluster.*, tb_login.*, tb_db.*, tb_ws.* from tb_cluster, tb_apk, tb_login, tb_db, tb_ws where tb_apk.KdCluster = tb_cluster.Kd_Cluster and tb_apk.KdDB = tb_db.Kd_DB and tb_apk.KdLogin = tb_login.Kd_Login and tb_apk.KdWS = tb_ws.Kd_WebSrv";
}
//$conn = mysqli_connect( $serverName, $connectionInfo);
$stmt = mysqli_query( $conn, $tsql);
// if( $stmt === false ) {
//       echo "Error in executing query.</br>";
//       die( print_r( mysqli_errors(), true));
//       //header('location:../index.php');
//   }
//   else{
//     //header('location:../index.php?status=sukses&page=lihat_websrv');
//   }
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Aplikasi</a>
  </li>
  <li class="breadcrumb-item active">Daftar Aplikasi</li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
    Daftar Aplikasi  <?php echo ($_GET['head']=="")? "": ": ".$hdn ?>
   </div> 
  <div class="card-body">
    <div class="table-responsive">
    <table id="datatables" class="table table-bordered table-sm table-hover table-striped">
      <thead class = "bg-success text-white">
         <tr align="center" class="small">
          <th width="30px" >No</th>
          <th width="100px">Kode Aplikasi</th>
          <th width="100px">Nama Aplikasi</th>
          <th>Cluster</th>
          <th>Database</th>
          <th>Web Server</th>
          <th>Login</th>
          <th width="170px">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          while ($row = mysqli_fetch_array($stmt)) { ?> 
            <tr class="small">
              <td class="text-center align-middle" > <?php echo $no ?> </td>
              <td class="text-center align-middle"> <?php echo $row['Kd_Apk'] ?></td>
              <td class="text-center align-middle"> <?php echo $row['Nm_Apk'] ?></td>
              <td class="text-center align-middle"> <?php echo $row['Nm_Cluster'] ?></td>
              <td class="text-center align-middle"> <?php echo $row['Nm_DB'] ?></td>
              <td class="text-center align-middle"> <?php echo $row['Nm_WebSrv'] ?></td>
              <td class="text-center align-middle"> <?php echo $row['Nm_Login'] ?></td>
              <td class="text-center align-middle">
              <a href="?page=edit_apk&kode=<?php echo $row['Kd_Apk'] ?>" class ="btn btn-primary btn-xs fa fa-edit" ></a> |
              <a href='Proses/proses-hapusapk.php?kode=<?php echo $row['Kd_Apk'] ?> ' class = "btn btn-danger btn-xs fa fa-trash"  onclick="return confirm('Hapus data?');"></a> |
              <a href="?page=info_apk&kode=<?php echo $row['Kd_Apk'] ?>" class ="btn btn-info btn-xs fa fa-info-circle" ></a>
              <?php echo "</td>"; ?>
            </tr>
            <?php $no++;
          }?>
      </tbody>
    </table>
  </div>
  <div class="card-footer bg-transparent">
    <a href="?page=input_apk" class ="btn btn-outline-primary btn-block  fa fa-edit" > Tambah Aplikasi </a>
  </div>
</div>
