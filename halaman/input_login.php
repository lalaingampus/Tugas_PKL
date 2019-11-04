  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="?page=lihat_cluster">Login</a>
    </li>
    <li class="breadcrumb-item active">Input login</li>
  </ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Input Login 
  </div> 
  <div class="card-body">
    <div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
          <form action="proses/proses-inputlg.php" method="POST">
            <div class="form-group row">
              <label for="KDCL" class="col-sm-4 col-form-label">Kode Login</label>
              <div class="col-sm-6">
                <input type="text" name="kode_lg" placeholder="Kode Login" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="NMCL" class="col-sm-4 col-form-label">Nama Login</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="nama_lg" placeholder="Nama Login">
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