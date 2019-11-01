  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="?page=lihat_cluster">Web Server</a>
    </li>
    <li class="breadcrumb-item active">Input Web Server</li>
  </ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Input Web Server
  </div> 
  <div class="card-body">
    <div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
          <form action="proses/proses-inputwebsrv.php" method="POST">
            <div class="form-group row">
              <label for="KDCL" class="col-sm-4 col-form-label">Kode Web Server</label>
              <div class="col-sm-6">
                <input type="text" name="kode_ws" placeholder="Kode Web Server" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">Nama Web Server</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nama_ws" placeholder="Nama Web Server">
              </div>
            </div> 
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-block" value="Submit" name="submit">Submit</button>
              </div>
            </div>
          </form>
        </span> 
      </div>
    </div> 
  </div>  
</div>