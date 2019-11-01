<?php
$kode = $_GET['kode'];

// buat query untuk ambil data dari database
//$data=mssql_fetch_array(mssql_query("select * from TB_Cluster where KDCluster ='$kode'"));
$sql = "select * from tb_ws where Kd_WebSrv = '$kode'";
$query = mysqli_query($conn, $sql);
$ws = mysqli_fetch_array($query);
//var_dump($clust)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="?page=lihat_login">Web Server</a>
  </li>
  <li class="breadcrumb-item active">
    <a ">Edit Web Server</a>
  </li>
</ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Edit Web Server : <?php echo $ws['Nm_WebSrv'] ?>
   </div> 
  <div class="card-body">
  	<div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
		   <form action="Proses/proses-editws.php" method="POST">
		   	<div class="form-group row">
		      <input type="hidden" name="kodepk" value="<?php echo $ws['Kd_WebSrv'] ?>" />
		      <label for="KDCL" class="col-sm-4 col-form-label">Kode Web Server</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" name="kode" placeholder="Kode Login" value="<?php echo $ws['Kd_WebSrv'] ?>" disabled/>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="NMCL" class="col-sm-4 col-form-label">Nama Web Server</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" name="nama_ws" placeholder="Nama Web Server" value="<?php echo $ws['Nm_WebSrv'] ?>">
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