<?php
$kode = $_GET['kode'];

// buat query untuk ambil data dari database
//$data=mssql_fetch_array(mssql_query("select * from TB_Cluster where KDCluster ='$kode'"));
$sql = "select * from tb_db where Kd_DB = '$kode'";
$query = mysqli_query($conn, $sql);
$db = mysqli_fetch_array($query);
//var_dump($clust)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="?page=lihat_db">Database</a>
  </li>
  <li class="breadcrumb-item active">
    <a ">Edit Database</a>
  </li>
</ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Edit Database : <?php echo $db['Nm_DB'] ?>
   </div> 
  <div class="card-body">
  	<div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
		   <form action="Proses/proses-editdb.php" method="POST">
		   	<div class="form-group row">
		      <input type="hidden" name="kodepk" value="<?php echo $db['Kd_DB'] ?>" />
		      <label for="KDCL" class="col-sm-4 col-form-label">Kode Database</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" name="kode" placeholder="Kode Database" value="<?php echo $db['Kd_DB'] ?>" disabled/>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="NMCL" class="col-sm-4 col-form-label">Nama Database</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" name="nama_db" placeholder="Nama Database" value="<?php echo $db['Nm_DB'] ?>">
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="NMCL" class="col-sm-4 col-form-label">IP Database</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" name="ip" placeholder="IP Database" value="<?php echo $db['IP_DB'] ?>">
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