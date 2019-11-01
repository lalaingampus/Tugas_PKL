<?php
$kd = $_GET['kode'];
$tsql = "Select TB_Apk.*, TB_Cluster.NamaCluster, TB_Login.*, TB_DB.*, TB_WebServ.* from TB_Cluster, TB_Apk, TB_Login, TB_DB, TB_WebServ where TB_Apk.KodeAplikasi = '$kd'";
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
$query = sqlsrv_query($conn, $tsql);
$apk = sqlsrv_fetch_array($query);


?>


<h3>Autocomplete Input Tanpa Database</h3>
            <form action="" method="post">
                <input type="text" id="buah" name="buah" placeholder="Nama Buah">
            </form>
