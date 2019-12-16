<?php

include 'koneksi.php';

$conn = open_db();

$nama = $conn->real_escape_string($_POST['nama']);
$noaims = $_POST['noaims'];
$email = $_POST['email'];
$id_majelis = $_POST['majelis'];
$nohp = $_POST['nohp'];

$nominal = $_POST['nominal'];

$nominal = str_replace( ',', '', $nominal);

date_default_timezone_set('Asia/Jakarta');
$created_at = date("Y-m-d H:i:s");

echo $nominal;

$sql = "SELECT noaims FROM list_pejanji WHERE noaims='$noaims'";
$results = $conn->query($sql);

if($results->num_rows)
{
	$sql = "UPDATE list_pejanji SET created_at = '$created_at', nama = '$nama', id_majelis = '$id_majelis' , nohp = '$nohp', email = '$email', nominal = '$nominal' WHERE noaims='$noaims'";
}
else
{
	$sql = "INSERT INTO list_pejanji (created_at, nama, noaims, id_majelis, nohp, email, nominal) VALUES ('$created_at','$nama','$noaims','$id_majelis','$nohp','$email','$nominal')";
}

$results = $conn->query($sql);

close_db($conn);

header( 'Location: selesai.php' );


?>