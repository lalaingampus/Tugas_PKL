<?php
// Set header type konten.
header("Content-Type: application/json; charset=UTF-8");

// Deklarasi variable untuk koneksi ke database.
$serverName = "LENOVO-PC\SQLEXPRESS"; //serverName\instanceName
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"DBProject");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

// Deklarasi variable keyword buah.
$buah = $_GET["query"];

// Query ke database.
$query  = "SELECT * FROM TB_Apk WHERE NamaAplikasi LIKE '%$buah%' ORDER BY NamaAplikasi DESC";
$q=sqlsrv_query($conn,$query);
// Cek apakah ada yang cocok atau tidak.
while($data=sqlsrv_fetch_array($q)) {
        $output['suggestions'][] = [
            'value' => $data['KodeAplikasi']." - ".$data['NamaAplikasi'],
            'apk'  => $data['KodeAplikasi']
        ];
    }

    // Encode ke JSON.
	//var_dump($output);
if(is_null($data)){
	$output['suggestions'][] = [
        'value' => '',
        'apk'  => ''
    ];
}
    echo json_encode($output);

