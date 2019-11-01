<?php

$kode = $_GET['kode'];

$sql = "select * from tb_apk where Kd_Apk = '$kode'";
$query = mysqli_query($conn, $sql);
$apk = mysqli_fetch_array($query);
//var_dump($apk);
$perintah="select * from tb_cluster where Sts_Cluster='Aktif'";
$queryq=mysqli_query($conn,$perintah);

$perintah2="select * from tb_db";
$perintah4="select * from tb_login";
$perintah3="select * from tb_ws";
$query4=mysqli_query($conn,$perintah4);
$query2=mysqli_query($conn,$perintah2);
$query3=mysqli_query($conn,$perintah3);

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
    Edit Aplikasi : <?php echo $apk['Nm_Apk'] ?>
   </div> 
    <div class="card-body">
    <div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">  
          <form action="Proses/proses-editapk.php" method="POST">
            <div class="form-group row">
              <input type="hidden" name="kodepk" value="<?php echo $apk['Kd_Apk'] ?>" />
              <label for="KDCL" class="col-3 col-form-label">Kode Aplikasi</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="kode" placeholder="Kode Aplikasi Ex : AP001" value="<?php echo $apk['Kd_Apk'] ?>" disabled/>
              </div>
            </div>
            <div class="form-group row">
              <label for="KDCL" class="col-3 col-form-label">Nama Aplikasi</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" placeholder="Nama Aplikasi" value="<?php echo $apk['Nm_Apk'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-sm-3">URL</label>
              <div class="col-sm-6">
                <input type="text" name="url" placeholder="http://contohsaja.com" class="form-control" value="<?php echo $apk['URL_Apk'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-sm-3">IP Aplikasi</label>
              <div class="col-sm-6">
                <input type="text" name="ip" placeholder="IP Aplikasi" class="form-control" value="<?php echo $apk['IP_Apk'] ?>">
              </div>
            </div> 
            <div class="form-group row">
              <label class="col-form-label col-sm-3">Tanggal GOLIVE</label>
              <div class="col-sm-6">
                <input type="text" id="tgl" name="tgl" placeholder="yyyy-mm-dd" class="form-control" value="<?php echo $apk['Tgl_Golive_Apk']; ?>">
              </div>
            </div> 
            <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-3 col-form-label">Fungsi Aplikasi</label>
              <div class="col-sm-6">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="fungsi" placeholder="Tuliskan fungsi dari Aplikasi...""><?php echo $apk['Fungsi_Apk'] ?></textarea>
              </div>
            </div>  
            <div class="form-group row">
              <legend class="col-form-label col-sm-3 pt-0">Status</legend>
              <div class="col-sm-5">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" value="Aktif" <?php echo ($apk['Sts_Apk'] == 'Aktif') ? "checked": "" ?>>
                  <label class="form-check-label" for="gridRadios1">
                    Aktif
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" value="Tidak Aktif" <?php echo ($apk['Sts_Apk'] == 'Tidak Aktif') ? "checked": "" ?>>
                  <label class="form-check-label" for="gridRadios2">
                    Tidak Aktif
                  </label>
                </div>
              </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-sm-3">Cluster</label>
            <div class="col-sm-6">
              <select class="form-control text-center" name="cl">
              <?php while($data=mysqli_fetch_array($queryq)){?>
                <option value="<?php echo $data['Kd_Cluster'];?>" <?php echo ($apk['KdCluster'] == $data['Kd_Cluster']) ? "selected": "" ?>> <?php echo $data['Kd_Cluster']." - ".$data['Nm_Cluster'];?></option>
              <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label col-sm-3">Database</label>
            <div class="col-sm-6">
              <select class="form-control text-center" name="db">
              <?php while($data2=mysqli_fetch_array($query2)){?>
                <option value="<?php echo $data2['Kd_DB'];?>" <?php echo ($apk['KdDB'] == $data2['Kd_DB']) ? "selected": "" ?>> <?php echo $data2['Kd_DB']." - ".$data2['Nm_DB'];?></option>
               <?php } ?>
              </select>
            </div>
          </div> 

          <div class="form-group row">
            <label class="col-form-label col-sm-3">Web Server</label>
            <div class="col-sm-6">
              <select class="form-control text-center" name="ws">
              <?php while($data3=mysqli_fetch_array($query3)){?>
                <option value="<?php echo $data3['Kd_WebSrv'];?>" <?php echo ($apk['KdWS'] == $data3['Kd_WebSrv']) ? "selected": "" ?>> <?php echo $data3['Kd_WebSrv']." - ".$data3['Nm_WebSrv'];?></option>
              <?php } ?>
              </select>
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-form-label col-sm-3">Login</label>
            <div class="col-sm-6">
              <select class="form-control text-center" name="lg">
              <?php while($data4=mysqli_fetch_array($query4)){?>
                <option value="<?php echo $data4['Kd_Login'];?>"<?php echo ($apk['KdLogin'] == $data4['Kd_Login']) ? "selected": "" ?>> <?php echo $data4['Kd_Login']." - ".$data4['Nm_Login'];?></option>
              <?php } ?>
              </select>
            </div>
            </div> 
            <div class="form-group row">
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary btn-block" value="Submit" name="submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>    
  </div>
</div>    