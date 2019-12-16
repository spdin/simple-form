<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="../css/jquery-ui.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/script.js"></script>
	<style>
	
	@media (min-width: 1200px) 
	{
		.container{
			max-width: 600px;
		}
	}
	

        body {
            //background-color: #5d8681;
			background-image: url("../img/bg_al-islam.gif");
        }

        .bld {
            font-weight: bold;
        }

        .lbl {
            font-size: 16px;
        }
        .rmvhover:hover{
            color: red;
        }
		
		
			table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
	
	</style>
  
   <title>Data Perjanjian Klinik HD - Gala Dinner</title>
</head>
<body>

<div class="container">

<div class="modal-content">
<div class="modal-header">
<?php

include "../koneksi.php";

$conn = open_db();

echo "<center><h2>List Daftar Pejanji yang Masuk</br>Klinik HD</h2><hr>";

$i = 1;

$sql = "SELECT count(id) AS jml_pejanji, SUM(nominal) AS jml_nominal FROM list_pejanji";
$retval = $conn->query($sql);
$row = $retval->fetch_array(MYSQLI_ASSOC);

$jml_pejanji = $row['jml_pejanji'];
$jml_nominal = $row['jml_nominal'];

$jml_nominal = number_format($jml_nominal,0,'.',',');

echo "<h4>Total Pejanji : $jml_pejanji</h4>";
echo "<h4>Total Nominal : Rp. $jml_nominal</h4></center>";



echo "<div style='overflow-x:auto;'><table>";
echo "<tr><th>No</th><th>Timestamp</th><th>Nama</th><th>No AIMS</th><th>Majelis</th><th>Nominal Perjanjian</th></tr>";
$sql = "SELECT * FROM list_pejanji ORDER BY created_at DESC";
$retval = $conn->query($sql);
while($row = $retval->fetch_array(MYSQLI_ASSOC))
{
	$created_at = $row['created_at'];
	$nama = $row['nama'];
	$noaims = $row['noaims'];
	$id_majelis = $row['id_majelis'];
	$nominal = $row['nominal'];
	
	$sql = "SELECT majelis FROM data_qm WHERE id='$id_majelis'";
	$retval2 = $conn->query($sql);
	$row2 = $retval2->fetch_array(MYSQLI_ASSOC);
	$majelis = $row2['majelis'];
	
	$nominal = number_format($nominal,0,'.',',');
	
	echo "<tr><td>$i</td><td>$created_at</td><td>$nama</td><td>$noaims</td><td>$majelis</td><td>Rp. $nominal</td></tr>";
	
	$i++;
}

echo "</table></div>";


close_db($conn);


?>		
		
</div>
</div>
</div>
</body>
<html>
