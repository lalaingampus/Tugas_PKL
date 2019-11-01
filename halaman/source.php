<?php
include "Proses/konek.php"; 
// Deklarasi variable keyword buah.
$buah = $_GET["query"];

// Query ke database.
$query  = "SELECT * FROM TB_Apk WHERE NamaAplikasi LIKE '%$buah%' ORDER BY NamaAplikasi DESC";
$result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
// Format bentuk data untuk autocomplete.
foreach($result as $data) {
    $output['suggestions'][] = [
        'value' => $data['buah'],
        'buah'  => $data['buah']
    ];
}
var_dump($data);
if (! empty($output)) {
    // Encode ke format JSON.
    echo json_encode($output);
}
?>