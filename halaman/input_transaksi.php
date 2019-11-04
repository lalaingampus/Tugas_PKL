<?php
// $today = date("Ym");
// //rubah bagian query buat max kode regis dari tb transaksi
// $query = "SELECT max(Kd_Apk) AS last FROM tb_apk where Kd_Apk like 'APK01%'";
// $q=mysqli_query($conn,$query);
// //$params = array();
// //$options =  array( "Scrollable" => mysqli_CURSOR_KEYSET );
// //$stmt = mysqli_query( $conn, $query , $params, $options );

// //$row_count = mysqli_num_rows( $stmt );
// while($data=mysqli_fetch_array($q)) {
//   if(is_null($data['last']))
//   {
//     $nextNoUrut = "1";
//     $nextNoTransaksi = $today.sprintf('%03s', $nextNoUrut);    
//   }
//   else
//   {
//     //echo "0";
//     //echo $data['last'];
//     $lastNoTransaksi = $data['last'];
//     $lastNoUrut = substr($lastNoTransaksi, 3, 3); 
//     //echo $lastNoTransaksi; 
//     $nextNoUrut = $lastNoUrut + 1;
//     //echo $nextNoUrut;
//     // membuat format nomor transaksi berikutnya
//     $nextNoTransaksi = $today.sprintf('%03s', $nextNoUrut);
//   }
// }


?>


  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="?page=lihat_transaksi">Transaksi</a>
    </li>
    <li class="breadcrumb-item active">Input Transaksi</li>
  </ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Input Database transaksi 
  </div> 
  <div class="card-body">
    <div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
          <form action="Proses/proses-inputtransaksi.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
              <label for="KDCL" class="col-sm-4 col-form-label">Nomor Registrasi</label>
              <div class="col-sm-6">
                <input type="text" name="no_reg" placeholder="Nomor Registrasi" class="form-control" >
              </div>
            </div>

            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">Tanggal Masuk Deploy</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="tgl_masuk" id="tgl" placeholder="Tahun-Bulan-Hari">
              </div>
            </div>

            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">Tanggal Selesai Deploy</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="tgl_selesai" id="tgl2" placeholder="Tahun-Bulan-Hari">
              </div>
            </div>

            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">Aplikasi</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="aplikasi" id="cariapk" placeholder="Kode/Nama Aplikasi" value="">
              </div>
            </div>

            <div class="form-group row">
              <label for="KDCL" class="col-sm-4 col-form-label">Versi</label>
              <div class="col-sm-6">
                <input type="text" name="versi" placeholder="Version Aplikasi" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">Tanggal Pemberitahuan</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="tgl_info" id="tgl3" placeholder="Tahun-Bulan-Hari">
              </div>
            </div>

            <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-4 col-form-label">Fitur</label>
              <div class="col-sm-6">
                <textarea class="form-control" id="exampleFormControlTextarea1"  name="fitur" placeholder="Tuliskan Fitur yang Telah Diperbaharui ..."></textarea>
              </div>
            </div>  

            <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-4 col-form-label">Fungsi</label>
              <div class="col-sm-6">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="fungsi" placeholder="Tuliskan Fungsi yang Telah Diperbaharui ..."></textarea>
              </div>
            </div> 

            <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-4 col-form-label">Keterangan</label>
              <div class="col-sm-6">
                <textarea class="form-control" id="exampleFormControlTextarea1"  name="keterangan" placeholder="Tuliskan Keterangan Version ..."></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="exampleFormControlTextarea1"  class="col-sm-4 col-form-label">Jenis Perubahan</label>
              <div class="col-sm-6">    
                <select class="form-control text-center" name="perubahan">
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
                <select class="form-control text-center" name="pengembangan">
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
                <select class="form-control text-center" name="sysUpdate">
                  <option selected>--- Pilih Jenis Update ---</option>
                  <option value="System Baru">System Baru</option>
                  <option value="Penyempurnaan">Penyempurnaan</option>
                  <option value="Perbaikan">Perbaikn</option>
                </select>
              </div>
            </div>

           <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">User Manual</label>
              <div class="col-sm-6">
                <input type="file" class="form-control" name="file" id="file">
              </div>
            </div>           

            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-block" value="Submit" name="submit">Submit</button>
              </div>
            </div>

          <div class="form-group row">
              <div class="col-sm-10">
                <button type="reset" class="btn btn-danger btn-block" value="Reset" name="submit">Reset</button>
              </div>
            </div>

          </form>
        </span> 
      </div>
    </div> 
  </div>  
</div>