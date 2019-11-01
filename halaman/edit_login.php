<?php
$kode = $_GET['kode'];

// buat query untuk ambil data dari database
//$data=mssql_fetch_array(mssql_query("select * from TB_Cluster where KDCluster ='$kode'"));
$sql = "select * from tb_login where Kd_Login = '$kode'";
$query = mysqli_query($conn, $sql);
$lg = mysqli_fetch_array($query);
//var_dump($clust)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="?page=lihat_login">Login</a>
  </li>
  <li class="breadcrumb-item active">
    <a ">Edit Logim</a>
  </li>
</ol> 

  <!-- Page Content -->
<div class="card">
  <div class="card-header text-center font-weight-bold">
    Edit Login : <?php echo $lg['Nm_Login'] ?>
   </div> 
  <div class="card-body">
  	<div class="container">
      <div class="row"> 
        <div class="col-3"></div>
        <div class="col-8">
		   <form action="Proses/proses-editlg.php" method="POST">
		   	<div class="form-group row">
		      <input type="hidden" name="kodepk" value="<?php echo $lg['Kd_Login'] ?>" />
		      <label for="KDCL" class="col-sm-4 col-form-label">Kode Login</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" name="kode" placeholder="Kode Login" value="<?php echo $lg['Kd_Login'] ?>" disabled/>
		      </div>
		    </div>
		    <div class="form-group row">
		      <label for="NMCL" class="col-sm-4 col-form-label">Nama Cluster</label>
		      <div class="col-sm-6">
		        <input type="text" class="form-control" name="nama_lg" placeholder="Nama Aplikasi" value="<?php echo $lg['Nm_Login'] ?>">
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