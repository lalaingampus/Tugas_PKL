  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="?page=lihat_cluster">Cluster</a>
    </li>
    <li class="breadcrumb-item active">Input Cluster</li>
  </ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Input Cluster 
   </div> 
  <div class="card-body">
  <form action="proses/proses-input.php" method="POST">
    <div class="form-group row">
      <label for="KDCL" class="col-sm-2 col-form-label">Kode Cluster</label>
      <div class="col-sm-5">
        <input type="text" name="kode_cluster" placeholder="Kode Cluster" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="NMCL" class="col-sm-2 col-form-label">Nama Cluster</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="nama_cluster" placeholder="Nama Cluster">
      </div>
    </div>
  <!-- <div class="form-group row">
    <label for="exampleFormControlTextarea1"  class="col-sm-2 col-form-label">Keterangan Cluster</label>
    <div class="col-sm-5">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan" placeholder="Tuliskan keterangan Cluster yang akan dibuat. Boleh dikosongkan apabila tidak ada keterangan...""></textarea>
    </div>
  </div>   -->
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Status</legend>
        <div class="col-sm-5">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="Aktif" checked>
            <label class="form-check-label" for="gridRadios1">
              Aktif
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="Tidak Aktif">
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
 </span> 
</div>