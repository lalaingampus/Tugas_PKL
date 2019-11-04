<?php 
$sql="select * from tb_ws";
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
$result = mysqli_query($conn, $sql);
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Web Server</a>
  </li>
  <li class="breadcrumb-item active">Daftar Web Server</li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
    Daftar Web Server
   </div> 
  <div class="card-body">
    <div class="table-responsive">
    <table id="datatables" class="table table-bordered table-sm table-hover table-striped" >
      <thead class="bg-success text-white">
        <tr align="center">
          <th>No</th>
          <th>Kode Web Server</th>
          <th>Nama Web Server</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          while ($row = mysqli_fetch_array($result)) { ?> 
            <td class="text-center align-middle"> <?php echo $no ?> </td>
            <td class="text-center align-middle"> <?php echo $row['Kd_WebSrv'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['Nm_WebSrv'] ?></td>
            <td class="text-center align-middle">
            <a href="?page=edit_webserv&kode=<?php echo $row['Kd_WebSrv'] ?>" class ="btn btn-primary btn-xs fa fa-edit" ></a> |
              <a href='Proses/proses-hapuswebserv.php?kode=<?php echo $row['Kd_WebSrv'] ?> ' class = "btn btn-danger btn-xs fa fa-trash"  onclick="return confirm('Hapus data?');"></a> |
              <a href="?page=lihat_apk&kode=<?php echo $row['Kd_WebSrv'] ?>" class ="btn btn-info btn-xs fa fa-info-circle" ></a>
            <?php echo "</td>"; ?> 
            </tr>
            <?php $no++;
          }?>
      </tbody>
    </table>
  </div>
</div>
<div class="card-footer bg-transparent">
  <a href="?page=input_websrv" class ="btn btn-outline-primary btn-block  fa fa-edit" > Tambah Web Server </a>
</div>



