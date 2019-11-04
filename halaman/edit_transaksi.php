<?php
$kode = $_GET['kode'];

// buat query untuk ambil data dari database
//$data=mssql_fetch_array(mssql_query("select * from TB_Cluster where KDCluster ='$kode'"));
$sql = "select * from tb_transaksi where Kd_Transaksi = '$kode'";
$query = mysqli_query($conn, $sql);
$db = mysqli_fetch_array($query);
//var_dump($clust)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="?page=lihat_db">Transaksi</a>
  </li>
  <li class="breadcrumb-item active">
    <a>Edit Transaksi</a>
  </li>
</ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Edit Transaksi : <?php echo $db['No_Registrasi'] ?>
   </div> 
  <div class="card-body">
    <div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
       <form action="Proses/proses-edittransaksi.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
          <input type="hidden" name="kode" value="<?php echo $db['Kd_Transaksi'] ?>" />
          <input type="hidden" name="fileLama" value="<?php echo $db['data'] ?>" />
          <label for="KDCL" class="col-sm-4 col-form-label">Kode Transaksi</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="kode" placeholder="Kode Transaksi" value="<?php echo $db['Kd_Transaksi'] ?>" disabled/>
          </div>
        </div>
        <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Nomor Registrasi</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="noreg" placeholder="Nama Database" value="<?php echo $db['No_Registrasi'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Tanggal Masuk Deploy</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="tgl_masuk" placeholder="Tgl Masuk" value="<?php echo $db['Tgl_Masuk'] ?>">
          </div>
        </div>
         <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Tanggal Selesai Deploy</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="tgl_selesai" placeholder="Tgl Masuk" value="<?php echo $db['Tgl_Selesai'] ?>">
          </div>
        </div>
         <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Aplikasi</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="aplikasi" placeholder="Tgl Masuk" value="<?php echo $db['aplikasi'] ?>">
          </div>
        </div>
         <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Versi</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="versi" placeholder="Versi" value="<?php echo $db['versi'] ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Tanggal Pemberitahuan</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="tgl_info" placeholder="Versi" value="<?php echo $db['Tgl_Info'] ?>">
          </div>
        </div>
         <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Fitur</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="fitur" placeholder="Tgl Masuk" value="<?php echo $db['fitur'] ?>">
          </div>
        </div>
         <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Fungsi</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="fungsi" placeholder="Tgl Masuk" value="<?php echo $db['fungsi'] ?>">
          </div>
        </div>
         <div class="form-group row">
          <label for="NMCL" class="col-sm-4 col-form-label">Keterangan</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="keterangan" placeholder="Tgl Masuk" value="<?php echo $db['keterangan'] ?>">
          </div>
        </div>

          <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-4 col-form-label">Jenis Perubahan</label>
              <div class="col-sm-6">    
                <select class="form-control text-center" name="perubahan" value="<?php echo $db['perubahan'] ?>">
                  <option selected>--- Pilih Jenis Perubahan ---</option>
                  <option value="Emergency">Emergency</option>
                  <option value="Normal">Normal</option>
                  <option value="Routine">Routine</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-4 col-form-label">Jenis Pengembangan</label>
              <div class="col-sm-6">    
                <select class="form-control text-center" name="pengembangan" value="<?php echo $db['pengembangan'] ?>">
                  <option selected>--- Pilih Jenis Pengembangan ---</option>
                  <option value="AdHoc">AdHoc</option>
                  <option value="Major">Major</option>
                  <option value="Medium">Medium</option>
                  <option value="Minor">Minor</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-4 col-form-label">Jenis Update</label>
              <div class="col-sm-6">    
                <select class="form-control text-center" name="sysUpdate" value="<?php echo $db['update'] ?>">
                  <option selected>--- Pilih Jenis Update ---</option>
                  <option value="System Baru">System Baru</option>
                  <option value="Penyempurnaan">Penyempurnaan</option>
                  <option value="Perbaikn">Perbaikn</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">User Manual</label>
              <div class="col-sm-6">
                <file src="file/<?= $db['data']; ?>">
                <input type="file" class="form-control" name="file" id="file" value="<?php echo $db['data'] ?>">
              </div>
            </div> 

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary btn-block" value="Submit" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>    
</div>