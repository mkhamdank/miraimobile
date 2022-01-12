<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YMPI Vaksin Coupon</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('logo_mirai_bundar.png')}}" />

	<link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/jquery.gritter.css') }}" >
	<link rel="stylesheet" href="{{ url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

	<style type="text/css">

		@font-face {
			font-family: Raleway-SemiBold;
			src: url('../fonts/raleway/Raleway-SemiBold.ttf'); 
		}

		@font-face {
			font-family: Raleway-Bold;
			src: url('../fonts/raleway/Raleway-Bold.ttf'); 
		}

		@font-face {
			font-family: Raleway-Black;
			src: url('../fonts/raleway/Raleway-Black.ttf'); 
		}

		.radio {
			display: inline-block;
			position: relative;
			padding-left: 35px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 16px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		/* Hide the browser's default radio button */
		.radio input {
			position: absolute;
			opacity: 0;
			cursor: pointer;
		}

		/* Create a custom radio button */
		.checkmark {
			position: absolute;
			top: 0;
			left: 0;
			height: 25px;
			width: 25px;
			background-color: #ccc;
			border-radius: 50%;
		}

		/* On mouse-over, add a grey background color */
		.radio:hover input ~ .checkmark {
			background-color: #ccc;
		}

		/* When the radio button is checked, add a blue background */
		.radio input:checked ~ .checkmark {
			background-color: #2196F3;
		}

		/* Create the indicator (the dot/circle - hidden when not checked) */
		.checkmark:after {
			content: "";
			position: absolute;
			display: none;
		}

		/* Show the indicator (dot/circle) when checked */
		.radio input:checked ~ .checkmark:after {
			display: block;
		}

		/* Style the indicator (dot/circle) */
		.radio .checkmark:after {
			top: 9px;
			left: 9px;
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: white;
		}

		#barcode {
			width: 120px;
			height: 120px;
		}

	</style>
</head>

<body>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<div id="loading" style="margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(0,191,255); z-index: 30001; opacity: 0.8; display: none">
		<p style="position: absolute; color: White; top: 45%; left: 35%;">
			<span style="font-size: 20px">Loading, mohon tunggu . . . <i class="fa fa-spin fa-refresh"></i></span>
		</p>
	</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
				

			<div id="form_anda">
				<span class="contact100-form-title" style="padding-bottom: 20px;text-align: center">
					YMPI E-Coupun Vaksin
				</span>

				<br>

				<!-- <span>Form ini digunakan untuk mengumpulkan data dari karyawan YMPI yang ingin melakukan pendaftaran Vaksinasi.</span><br> -->
				<!-- <span style="color: red;font-weight: bold;">Karyawan yang wajib mengisi form ini adalah yang sudah melaksanakan Vaksinasi.</span> -->

				<div class="form-group row" style="margin-top: 3%;background-color: #b464f5;color: white;padding: 10px;margin:0;border-radius: 5px">
					<label class="col-xs-6 header-tab"><b>QR Code Karyawan & Keluarga</b></label>
				</div>

      			<input type="hidden" value="{{csrf_token()}}" name="_token" />
				<label class="label-input1002">Nomor Induk Karyawan (NIK) <span style="color:red">*</span></label>

				<input type="text" class="form-control" id="employee_id" name="employee_id" onkeyup="checkEmp(this.value)">

				<label class="label-input1002" id="labelnama">Nama Lengkap</label>

				<input type="text" class="form-control" id="name" name="name" readonly>


					@php
					include public_path(). "/qr_generator/qrlib.php";

					QRcode::png('data',public_path().'/qr_image/qr_code_data.png');

					@endphp


					<img id="barcode" src="{{ asset('/qr_image/qr_code_data.png') }}">


			</div>
			
			<div id="form_terimakasih" style="display: none" >
			</div>
		</div>
	</div>

</body>

<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{ url('vendor/animsition/js/animsition.min.js')}}"></script>
<script src="{{ url('vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ url('vendor/select2/select2.min.js')}}"></script>
<script src="{{ url('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{ url('vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{ url('vendor/countdowntime/countdowntime.js')}}"></script>
<script src="{{ url('js/jquery.gritter.min.js') }}"></script>
<script src="{{ url('js/main.js')}}"></script>
<script src="{{ url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		$('#labelnama').hide();
		$('#name').hide();

		$('#employee_id').val("");
		$('#name').val("");

	});
	
	$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }); 

	function checkEmp(value) {
		if (value.length == 6) {
			var data = {
      	employee_id:$('#employee_id').val()
      }

      $.get('{{ url("get_employee_sunfish") }}',data, function(result, status, xhr){
	      if(result.status){
	      	$('#labelnama').show();
					$('#name').show();

					$.each(result.employee, function(key, value) {
						$('#name').val(value.name);
					});
	      }
      });

		}

		else if (value.length == 9) {
			var data = {
		      	employee_id:$('#employee_id').val()
		      }

		      $.get('{{ url("get_employee_sunfish") }}',data, function(result, status, xhr){
			      if(result.status){
							$('#name').show();
							$('#labelnama').show();

							$.each(result.employee, function(key, value) {
								$('#name').val(value.name);
							});
			      }
			      else{
			        alert('NIK Tidak ditemukan');
			      }

		      });
		} else{
			$('#labelnama').hide();
			$('#name').hide();
			
		}
	}

	function openSuccessGritter(title, message){
		jQuery.gritter.add({
			title: title,
			text: message,
			class_name: 'growl-success',
			image: '{{ url("images/image-screen.png") }}',
			sticky: false,
			time: '2000'
		});
	}

	function openErrorGritter(title, message) {
		jQuery.gritter.add({
			title: title,
			text: message,
			class_name: 'growl-danger',
			image: '{{ url("images/image-stop.png") }}',
			sticky: false,
			time: '2000'
		});
	}

</script>

</html>