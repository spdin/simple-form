<?php

if (!empty($_POST['noaims'])) 
	$noaims = $_POST['noaims'];
else
	header( 'Location: cekperjanjian.php' );

?>

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	-->
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.number.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
   
    <script src="js/validate.js"></script>
	
	<style>
	
	@media (min-width: 1200px) 
	{
		.container{
			max-width: 600px;
		}
	}
	

        body {
            //background-color: #5d8681;
			background-image: url("img/bg_al-islam.gif");
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
	
	</style>
  
   <title>Cek Perjanjian Klinik HD</title>
</head>
<body>

<div>
<div class="container">

<div class="modal-content">
        <div class="modal-header">
 <center><img src="img/LOGO-MKAI.png" style="width:230px;height:60px;"></center>
 </br>
</br>

<?php

include '../../koneksi.php';

$conn = open_db();

$noaims = $conn->real_escape_string($noaims); // mysql_real_escape_string($_POST['password']);
$noaims= preg_replace('/\s+/','',$noaims);

$sql = "SELECT noaims, nominal FROM list_pejanji WHERE noaims='$noaims'";
$results = $conn->query($sql);

if($results->num_rows)
{
	$row = $results->fetch_array(MYSQLI_ASSOC);
	$nominal = number_format($row['nominal'], 0, '.', ',');
	echo "<h4 align='center'>Perjanjian yang telah dimasukkan adalah Rp $nominal</h4>";
}
else
{
	$sql = "SELECT noaims, nominal FROM list_pejanji_gd WHERE noaims='$noaims'";
	$results = $conn->query($sql);
	
	if($results->num_rows)
	{
		$row = $results->fetch_array(MYSQLI_ASSOC);
		$nominal = number_format($row['nominal'], 0, '.', ',');
		echo "<h4 align='center'>Tuan termasuk dalam pejanji Gala-Dinner. </br> Perjanjian yang telah dimasukkan adalah Rp $nominal</h4>";
	}
	else
	{
		echo "<h4 align='center'>Anda belum memasukan perjanjian</h4>";
		echo "<h4 align='center'>Untuk mengisi perjanjian klik link dibawah ini :</h4></br>";
		echo "<h4 align='center'><u><a href='index.php'>LINK PERJANJIAN KLINIK HD</a></u></h4>";
	}
}

close_db($conn);

?>

</br>
</br>
</br>
</div>
</div>
</div>

</body>
<html>
