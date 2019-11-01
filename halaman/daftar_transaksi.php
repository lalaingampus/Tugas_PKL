<?php 
$sql="select * from tb_transaksi";
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
$result = mysqli_query($conn, $sql);

//var_dump($res)
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Transaksi</a>
  </li>
  <li class="breadcrumb-item active">Daftar Transaksi</li>
</ol>

<div class="card">
  <div class="card-header text-center font-weight-bold">
    Daftar Database Transaksi
   </div> 
  <div class="card-body">
    <div class="table-responsive">
    <table id="datatables" class="table table-bordered table-sm table-hover table-striped" >
      <thead class="bg-success text-white">
        <tr align="center">
          <th>No</th>
          <th>No Registrasi</th>
          <th>Versi</th>
          <th>Fitur</th>
          <th>Fungsi</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no=1;
          while ($row = mysqli_fetch_array($result)) { ?> 
            <td class="text-center align-middle"> <?php echo $no ?> </td>
            <td class="text-center align-middle"> <?php echo $row['No_Registrasi'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['versi'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['fitur'] ?></td>
            <td class="text-center align-middle"> <?php echo $row['fungsi'] ?></td>
           
            <td class="text-center align-middle">
            <a href="?page=edit_transaksi&kode=<?php echo $row['Kd_Transaksi'] ?>" class ="btn btn-primary btn-xs fa fa-edit" > Edit</a> |
            <a href='Proses/proses-hapustransaksi.php?kode=<?php echo $row['Kd_Transaksi'] ?> ' class = "btn btn-danger btn-xs fa fa-trash"  onclick="return confirm('Menghapus data ini berarti menghapus juga data Transaksi yang ada dalam Transaksi ini. Yakin hapus data?');"> Hapus</a> |
            <a <?php echo "href=" ?>?page=lihat_transaksi&head=<?php echo $row['Kd_Transaksi']?>&nama=<?php echo $row['No_Registrasi']?>&type=cluster class="btn btn-info fa fa-search" >Lihat</a>
            <?php echo "</td>"; ?> 
            </tr>
            <?php $no++;
          }?>
        </td>
      </tbody>
    </table>
  </div>
</div>
<div class="card-footer bg-transparent">
  <a href="?page=input_transaksi" class ="btn btn-outline-primary btn-block  fa fa-edit" > Tambah Transaksi </a>
</div>



