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
	<link href="css/jquery-ui.min.css" rel="stylesheet">
	<link href="css/sweetalert2.min.css" rel="stylesheet">
	<script src="js/sweetalert2.min.js"></script>
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
  
   <title>Formulir Perjanjian Klinik HD</title>
</head>
<body>

<div>
<div class="container">

<div class="modal-content">
        <div class="modal-header">
 <center><img src="img/LOGO-MKAI.png" style="width:230px;height:60px;"></center>
<h3 align="center">Cek Perjanjian Pembangunan</br>Klinik Haemodialisis</h3>
<center><small>Untuk melihat perjanjian yang sudah masuk dapat dilihat dengan No AIMS</small></center>
</br>
<form name ="input_form" id="myForm" action="cek.php" method="POST">

	<center>
	<div class="form-group">
	<label for="usr">No AIMS</label>
	<input type="number" maxlength="5" name= "noaims" class="form-control" required> 
	</div>
	</center>
	  

	</br>
	<center><input type="submit" class="confirmation" id="btn-submit" value="  CEK PERJANJIAN   " style="height: 40px;"></center>
	
	</br>
</form>
</div>
</div>
<center> <p style="color:white;"></p></center>
</div>

<script>
$(window).load(function() {
    $('form').get(0).reset(); //clear form data on page load
});
</script>
</body>
<html>
