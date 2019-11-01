<?php 
$sql="select * from tb_login";
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
$result = mysqli_query($conn, $sql);

/*if( $result === false ) {
      echo "Error in executing query.</br>";
      die( print_r( sqlsrv_errors(), true));
      //header('location:../index.php');
  }
  else{
    //header('location:../index.php?status=sukses&page=lihat_websrv');
  }*/
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Login</a>
  </li>
  <li class="breadcrumb-item active">Daftar Login</li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
    Daftar Login
   </div> 
  <div class="card-body">
    <div class="table-responsive">
    <table id="datatables" class="table table-bordered table-sm table-hover table-striped" >
      <thead class="bg-success text-white">
        <tr align="center">
          <th>No</th>
          <th>Kode Login</th>
          <th>Nama Login</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          while ($row = mysqli_fetch_array($result)) { ?> 
            <td class="text-center align-middle"> <?php echo $no ?> </td>
            <td class="text-center align-middle"> <?php echo $row['Kd_Login'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['Nm_Login'] ?></td>
            <td class="text-center align-middle">
            <a href="?page=edit_login&kode=<?php echo $row['Kd_Login'] ?>" class ="btn btn-primary btn-xs fa fa-edit" >  Edit</a> |
            <a href='Proses/proses-hapuslg.php?kode=<?php echo $row['Kd_Login'] ?> ' class = "btn btn-danger btn-xs fa fa-trash"  onclick="return confirm('Menghapus data ini berarti menghapus juga data Aplikasi yang ada dalam data login ini. Yakin hapus data?');"> Hapus</a> |
            <a <?php echo "href=" ?>"?page=lihat_apk&head=<?php echo $row['Kd_Login']?>&nama=<?php echo $row['Nm_Login']?>&type=login" class="btn btn-info fa fa-search" >Lihat</a>
            <?php echo "</td>"; ?> 
            </tr>
            <?php $no++;
          } ?>
      </tbody>
    </table>
  </div>
</div>
<div class="card-footer bg-transparent">
  <a href="?page=input_login" class ="btn btn-outline-primary btn-block  fa fa-edit" > Tambah Login </a>
</div>