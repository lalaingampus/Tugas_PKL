<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Cluster</a>
  </li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
      Daftar Cluster
  </div>
  <div class="row">
    <?php
    $tsql = "Select * from TB_Cluster";
    //$conn = sqlsrv_connect( $serverName, $connectionInfo);
    $stmt = sqlsrv_query( $conn, $tsql);
    $no = 0;
    do {
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) { ?>  
        <div class="col-md-4">
          <div class="card border-white">
          <div class="card-body">
            <div class="card <?php echo ($row['Status'] == 'Aktif') ? " border-success": "border-danger"?> mb-3 small align-middle text-center" style="max-width: 20rem;">
                <div style="height: 3rem;" class="card-header  <?php echo ($row['Status'] == 'Aktif') ? " border-success ": " border-danger"?> text-center overflow-auto" ><?php echo $row['KodeCluster']." - ".$row['NamaCluster'] ?> <span <?php echo "class=" ?>" <?php echo ($row['Status'] == 'Aktif') ? "badge badge-success": "badge badge-danger"?>"> <?php echo ($row['Status'] == 'Aktif') ? "Aktif": "Tidak Aktif"?></span></div>
                <div class="card-body">
                <p class="card-text text-center overflow-auto" style="height: 7rem;"><?php echo $row['Keterangan']?></p>
                </div>
                <div <?php echo "class=" ?>" <?php echo ($row['Status'] == 'Aktif') ? "card-footer bg-transparent border-success": "card-footer bg-transparent border-danger"?> text-center">
                  <a class="btn btn-primary fa fa-edit" href="?page=edit_cluster&kode=<?php echo $row['KodeCluster'] ?>">Edit</a>
                  <a href='Proses/proses-hapus.php?kode=<?php echo $row['KodeCluster'] ?> ' class = "btn btn-danger fa fa-trash"  onclick="return confirm('Menghapus data ini berarti menghapus juga data Aplikasi yang ada dalam Cluster ini. Yakin hapus data??');" >Hapus</a>
                  <a <?php echo "href=" ?>"?page=lihat_apk&head=<?php echo $row['KodeCluster']?>&nama=<?php echo $row['NamaCluster']?>&type=cluster" class="btn btn-info fa fa-search" >Lihat</a>
                </div>
            </div>
          </div>
          </div>
        </div> 
      <?php }   
    } while ( sqlsrv_next_result($stmt) ); ?>
  </div>
  <div class="card-footer bg-transparent">
  <a href="?page=input_cluster" class ="btn btn-outline-primary btn-block  fa fa-edit" > Tambah Cluster </a>
</div>
