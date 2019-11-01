<?php
$kode = $_GET['kode'];

// buat query untuk ambil data dari database
//$data=mssql_fetch_array(mssql_query("select * from TB_Cluster where KDCluster ='$kode'"));
$sql = "select * from tb_cluster where Kd_Cluster = '$kode'";
$query = mysqli_query($conn, $sql);
$clust = mysqli_fetch_array($query);
//var_dump($clust)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="?page=lihat_cluster">Cluster</a>
  </li>
  <li class="breadcrumb-item active">
    <a ">Edit Cluster</a>
  </li>
</ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Edit Cluster : <?php echo $clust['Nm_Cluster'] ?>
   </div> 
  <div class="card-body">
    <form action="Proses/proses-edit.php" method="POST">
    <div class="form-group row">
      <input type="hidden" name="kodepk" value="<?php echo $clust['Kd_Cluster'] ?>" />
      <label for="KDCL" class="col-sm-2 col-form-label">Kode Cluster</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="kode" placeholder="Kode Cluster" value="<?php echo $clust['Kd_Cluster'] ?>" disabled/>
      </div>
    </div>
    <div class="form-group row">
      <label for="NMCL" class="col-sm-2 col-form-label">Nama Cluster</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_clust" placeholder="Nama Aplikasi" value="<?php echo $clust['Nm_Cluster'] ?>">
      </div>
    </div>
    <!-- <div class="form-group row">
      <label for="exampleFormControlTextarea1"  class="col-sm-2 col-form-label">Keterangan Cluster</label>
      <div class="col-sm-5">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" placeholder="Tuliskan keterangan Cluster yang akan dibuat. Boleh dikosongkan apabila tidak ada keterangan..."><?php /*echo $clust['Keterangan']*/ ?></textarea>
      </div>
    </div>  -->
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
        <div class="col-sm-5">
          	<?php $st = $clust['Sts_Cluster']; ?>
          	<div class="form-check">
            	<input class="form-check-input" type="radio" name="stat" value="Aktif"<?php echo ($st == 'Aktif') ? "checked": "" ?>>
            	<label class="form-check-label" for="gridRadios1">
              		Aktif
            	</label>
          	</div>
          	<div class="form-check">
            	<input class="form-check-input" type="radio" name="stat" value="Tidak Aktif" <?php echo ($st == 'Tidak Aktif') ? "checked": "" ?>>
            	<label class="form-check-label" for="gridRadios2">
              		Tidak Aktif
            	</label>
          	</div>
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