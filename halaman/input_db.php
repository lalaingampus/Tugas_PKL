  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="?page=lihat_cluster">Database</a>
    </li>
    <li class="breadcrumb-item active">Input Database</li>
  </ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Input Database 
  </div> 
  <div class="card-body">
    <div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
          <form action="proses/proses-inputdb.php" method="POST">
            <div class="form-group row">
              <label for="KDCL" class="col-sm-4 col-form-label">Kode Database</label>
              <div class="col-sm-6">
                <input type="text" name="kode_db" placeholder="Kode Database" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">Nama Database</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nama_db" placeholder="Nama Database">
              </div>
            </div>
            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">IP Database</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="ip_db" placeholder="IP Database">
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