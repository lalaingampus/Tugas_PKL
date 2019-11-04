<?php 
$sql="select * from tb_regis";
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
$result = mysqli_query($conn, $sql);

//var_dump($res)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php">User</a>
  </li>
  <li class="breadcrumb-item active">Daftar User</li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
    Daftar Database User
   </div> 
  <div class="card-body">
    <div class="table-responsive">
    <table id="datatables" class="table table-bordered table-sm table-hover table-striped" >
      <thead class="bg-success text-white">
        <tr align="center">
          <th>No</th>
          <th>Nama User</th>
          <th>Email User</th>
        
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          while ($row = mysqli_fetch_array($result)) { ?> 
            <td class="text-center align-middle"> <?php echo $no ?> </td>
            <td class="text-center align-middle"> <?php echo $row['Nm_Login'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['Eml_Login'] ?></td>
            

            <td class="text-center align-middle">
            <a href="?page=edit_login&kode=<?php echo $row['Kd_Login'] ?>" class ="btn btn-primary btn-xs fa fa-edit" ></a> |
              <a href='Proses/proses-hapuslg.php?kode=<?php echo $row['Kd_Login'] ?> ' class = "btn btn-danger btn-xs fa fa-trash"  onclick="return confirm('Hapus data?');"></a> |
              <a href="?page=lihat_apk&kode=<?php echo $row['Kd_Login'] ?>" class ="btn btn-info btn-xs fa fa-info-circle" ></a>
            </tr>
            <?php $no++;
          }?>
        </td>
      </tbody>
    </table>
  </div>
</div>



