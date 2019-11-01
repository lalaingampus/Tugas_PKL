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
            <div <?php echo "class=" ?>" <?php echo ($row['Ket'] == 'Aktif') ? "card border-success mb-3": "card border-danger mb-3"?>" style="max-width: 20rem;">
                <div <?php echo "class=" ?>" <?php echo ($row['Ket'] == 'Aktif') ? "card-header border-success text-center": "card-header border-danger text-center"?>"><?php echo $row['KDCluster']." - ".$row['NamaCluster'] ?> <span <?php echo "class=" ?>" <?php echo ($row['Ket'] == 'Aktif') ? "badge badge-success": "badge badge-danger"?>"> <?php echo ($row['Ket'] == 'Aktif') ? "Aktif": "Tidak Aktif"?></span></div>
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div <?php echo "class=" ?>" <?php echo ($row['Ket'] == 'Aktif') ? "card-footer bg-transparent border-success": "card-footer bg-transparent border-danger"?> text-center">
                  <button type="button" class="btn btn-primary fa fa-edit" href="#">Edit</button>
                  <button type="button" class="btn btn-danger fa fa-trash" href="#">Hapus</button>
                  <a href="?page=lihat_apk" class="btn btn-info fa fa-search" >Lihat</a>
                </div>
            </div>
          </div>
          </div>
        </div> 
      <?php }   
    } while ( sqlsrv_next_result($stmt) ); ?>
  </div>
</div>
