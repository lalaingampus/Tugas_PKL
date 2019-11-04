<?php 
$sql="select * from tb_cluster";
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
$result = mysqli_query($conn, $sql);

//var_dump($res)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Cluster</a>
  </li>
  <li class="breadcrumb-item active">Daftar Cluster</li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
    Daftar Database
   </div> 
  <div class="card-body">
    <div class="table-responsive">
    <table id="datatables" class="table table-bordered table-sm table-hover table-striped" >
      <thead class="bg-success text-white">
        <tr align="center">
          <th>No</th>
          <th>Kode Cluster</th>
          <th>Nama Cluster</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          while ($row = mysqli_fetch_array($result)) { ?> 
            <td class="text-center align-middle"> <?php echo $no ?> </td>
            <td class="text-center align-middle"> <?php echo $row['Kd_Cluster'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['Nm_Cluster'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['Sts_Cluster'] ?></td>
            <td class="text-center align-middle">
             <a href="?page=edit_cluster&kode=<?php echo $row['Kd_Cluster'] ?>" class ="btn btn-primary btn-xs fa fa-edit" ></a> |
              <a href='Proses/proses-hapuscluster.php?kode=<?php echo $row['Kd_Cluster'] ?> ' class = "btn btn-danger btn-xs fa fa-trash"  onclick="return confirm('Hapus data?');"></a> |
              <a href="?page=lihat_apk&kode=<?php echo $row['Kd_Cluster'] ?>" class ="btn btn-info btn-xs fa fa-info-circle" ></a>
            </tr>
            <?php $no++;
          }?>
      </tbody>
    </table>
  </div>
</div>
<div class="card-footer bg-transparent">
  <a href="?page=input_cluster" class ="btn btn-outline-primary btn-block  fa fa-edit" > Tambah Cluster </a>
</div>



