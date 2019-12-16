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
		
		.red {
			color:red;
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
<h3 align="center">Formulir Perjanjian Pembangunan</br>Klinik Haemodialisis</h3>
<center><small>Periode Perjanjian Nov 2019 - Okt 2020</small></center>
</br>
<form name ="input_form" id="myForm" action="kirim.php" method="POST">

	<input type="hidden" name="id" value = '<?php echo $id_report;?>'>
	
	<div class="form-group">
	<label for="usr">Nama Anggota <span style="color: red">*</span></label>
	<input type="text" name= "nama" id="nama" class="form-control" required> 
	</div>
	
	<div class="form-group">
	<label for="usr">No AIMS <span style="color: red">*</span></label>
	<input type="number" maxlength="5" name= "noaims" class="form-control" required> 
	</div>
	
	<div class="form-group">
	<label for="usr">Majelis <span style="color: red">*</span></label>
	<select class="form-control" name="majelis" required>
		<option value='' selected> -- Pilih Majelis -- </option>
		
		<?php
		
			include 'koneksi.php';
			
			$conn = open_db();
			
			$sql = "SELECT id, majelis FROM data_qm ORDER by majelis ASC";
			$results = $conn->query($sql);
			
			while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
				$majelis = $row['majelis'];
				$id = $row['id'];
				echo "<option value='$id'> $majelis </option>";
			}
			
			close_db($conn);

		?>
		
	</select>
	</div>
	
	<div class="form-group">
	<label for="usr">No Handphone <span style="color: red">*</span></label>
	<input type="number" maxlength="15" name= "nohp" class="form-control" required> 
	</div>
	
	
	<div class="form-group">
	<label for="usr">E-mail</label>
	<input type="text" name= "email" class="form-control"> 
	</div>

	<div class="form-group">
	<label for="usr">Jumlah Perjanjian <span style="color: red">*</span></label>
	<div class="input-group">
	
	<div class="input-group-addon"><b class="lbl">Rp.</b></div>
	<input type="text" name= "nominal" inputmode="numeric" class="form-control price penghasilan" id="nominal" required> 
	</div>
	</div>
	
	  
    </div>

	</div>
	</br>
	<center><input type="submit" class="confirmation" id="btn-submit" value="  KIRIM PERJANJIAN   " style="height: 40px;"></center>
	
	</br>
</br>
</form>
</div>
</div>
<center> <p style="color:white;">This form was created by MKA Indonesia</p></center>
</div>

<script>

$("#nominal0").prop('disabled', true);

function format_number(number)//, prefix)//, thousand_separator, decimal_separator)
{
	var 	thousand_separator = thousand_separator || ',',
		decimal_separator = decimal_separator || '.',
		regex		= new RegExp('[^' + decimal_separator + '\\d]', 'g'),
		number_string = number.replace(regex, '').toString(),
		split	  = number_string.split(decimal_separator),
		rest 	  = split[0].length % 3,
		result 	  = split[0].substr(0, rest),
		thousands = split[0].substr(rest).match(/\d{3}/g);
	
	if (thousands) {
		separator = rest ? thousand_separator : '';
		result += separator + thousands.join(thousand_separator);
	}
	result = split[1] != undefined ? result + decimal_separator + split[1] : result;
	return result;
	//return prefix == undefined ? result : (result ? prefix + result : '');
};

$('.price').number( true, 0 );
  
$('.price').on('keyup keydown',function()
{
  var num1, num2;
  num1 = $(this).val();
  num2 = format_number(num1);
  //num2 = numeral(num1).format('0,0');
  $(this).val(num2);
});


$('form').submit(function () {
	
	//e.preventDefault();
    // Get the Login Name value and trim it
	var nama = $('#nama').val();
    var nominal = $('#nominal').val();
	
	//swal("Perjanjian anda akan disimpan", "Nominal Perjanjian anda adalah Rp. "+nominal, "success");
	
    if (nominal == '0' || nominal == '') {
        Swal.fire({
		  type: 'error',
		  title: 'Jumlah Nominal tidak boleh bernilai 0'
		  //text: 'Jumlah candah tidak boleh bernilai 0'
		});
        return false;
    }
	
	//alert("Assalamu'alaikum, Tuan "+nama+"\nNominal Perjanjian Anda adalah Rp. "+nominal);
	
	if (!confirm("Assalamu'alaikum, Tuan "+nama+"\nNominal Perjanjian Anda adalah Rp. "+nominal)) 
		return false;//e.preventDefault();
});

$(window).load(function() {
    $('form').get(0).reset(); //clear form data on page load
});

</script>

</body>
<html>
