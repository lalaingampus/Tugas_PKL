<?php

$kode = $_GET['kode'];

$sql = "select * from TB_Apk where KodeAplikasi = '$kode'";
$query = sqlsrv_query($conn, $sql);
$apk = sqlsrv_fetch_array($query);

$perintah="select * from TB_Cluster where Status='Aktif'";
$query2=sqlsrv_query($conn,$perintah);

$perintah2="select * from TB_DB";
$perintah4="select * from TB_Login";
$perintah3="select * from TB_WebServ";
$query4=sqlsrv_query($conn,$perintah4);
$query2=sqlsrv_query($conn,$perintah2);
$query3=sqlsrv_query($conn,$perintah3);

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Aplikasi</a>
  </li>
  <li class="breadcrumb-item">
    <a href="?page=lihat_apk">Daftar Aplikasi</a>
  </li>
  <li class="breadcrumb-item active">Form Edit Aplikasi</li>
</ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Edit Aplikasi : <?php echo $apk['NamaAplikasi'] ?>
   </div> 
  <div class="card-body">
    <form action="Proses/proses-editapk.php" method="POST">
    <div class="form-group row">
      <input type="hidden" name="kodepk" value="<?php echo $apk['KodeAplikasi'] ?>" />
      <label for="KDCL" class="col-sm-2 col-form-label">Kode Aplikasi</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="kode" placeholder="Kode Aplikasi Ex : AP001" value="<?php echo $apk['KodeAplikasi'] ?>" disabled/>
      </div>
    </div>
    <div class="form-group row">
      <label for="NMCL" class="col-sm-2 col-form-label">Nama Aplikasi</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_apk" placeholder="Nama Aplikasi" value="<?php echo $apk['NamaAplikasi'] ?>">
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Cluster</legend>
        <div class="col-sm-5">
          <select class="form-control" name="cluster">
            <?php 
            $st = $apk['Kode_Cluster'];
             while($data=sqlsrv_fetch_array($query2)){?>
            <option value="<?php echo $data['KodeCluster'];?>" <?php echo ($st == $data['KodeCluster']) ? "selected": "" ?>> <?php echo $data['KodeCluster']." - ".$data['NamaCluster'];?></option>
            <?php } ?>
          </select>
        </div>
      </div>
    </fieldset>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" value="Submit" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>