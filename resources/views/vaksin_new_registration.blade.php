<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YMPI Pendaftaran Vaksin</title>
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
					Pendaftaran Vaksin YMPI
				</span>

				<br>

				<!-- <span>Form ini digunakan untuk mengumpulkan data dari karyawan YMPI yang ingin melakukan pendaftaran Vaksinasi.</span><br> -->
				<!-- <span style="color: red;font-weight: bold;">Karyawan yang wajib mengisi form ini adalah yang sudah melaksanakan Vaksinasi.</span> -->

				<div class="form-group row" style="margin-top: 3%;background-color: #b464f5;color: white;padding: 10px;margin:0;border-radius: 5px">
					<label class="col-xs-6 header-tab"><b>Identitas Karyawan</b></label>
				</div>

      			<input type="hidden" value="{{csrf_token()}}" name="_token" />
				<label class="label-input1002">Nomor Induk Karyawan (NIK) <span style="color:red">*</span></label>

				<input type="text" class="form-control" id="employee_id" name="employee_id" onkeyup="checkEmp(this.value)">

				<label class="label-input1002" id="labelnama">Nama Lengkap</label>

				<input type="text" class="form-control" id="name" name="name" readonly>

				<label class="label-input1002" id="labeldept">Departemen</label>

				<input type="text" class="form-control" id="department" name="department" readonly>

				<label class="label-input1002" id="labelktp">No KTP</label>

				<input type="text" class="form-control" id="ktp" name="ktp" readonly="">

				<label class="label-input1002" id="labelplace">Tempat Lahir</label>

				<input type="text" class="form-control" id="birth_place" name="birth_place" readonly="">

				<label class="label-input1002" id="labeldate">Tanggal Lahir</label>

				<input type="text" class="form-control" id="birth_date" name="birth_date" readonly="">

				<label class="label-input1002" id="labeladdress">Alamat Sesuai KTP</label>

				<input type="text" class="form-control" id="address" name="address">

				<label class="label-input1002" id="labelphone">No HP</label>

				<input type="text" class="form-control" id="phone" name="phone">


				<div id="keluarga">


					<label class="label-input1002" id="labelkeluarga">Jumlah Keluarga yang didaftarkan</label>

					<select class="form-control select2" data-placeholder="Jumlah Keluarga" id="jumlah_keluarga" name="jumlah_keluarga" style="width: 100%" required onchange="daftarkeluarga(this)">
						<option style="color:grey;" value="">Jumlah Keluarga Yang Di daftarkan</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>


					<div id="detail_keluarga">
					</div>

					<div class="container-contact100-form-btn" style="margin-top: 20px">
						<button class="contact100-form-btn" onclick="save()">
							<span>
								Submit
								<i class="fa fa-save"></i>
							</span>
						</button>
					</div>
				</div>
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
		$('#labeldept').hide();
		$('#department').hide();
		$('#labelktp').hide();
		$('#ktp').hide();
		$('#labelplace').hide();
		$('#birth_place').hide();
		$('#labeldate').hide();
		$('#birth_date').hide();
		$('#labeladdress').hide();
		$('#address').hide();
		$('#labelphone').hide();
		$('#phone').hide();
		$('#keluarga').hide();

		$('#employee_id').val("");
		$('#name').val("");
		$('#department').val("");
		$('#ktp').val("");
		$('#birth_place').val("");
		$('#birth_date').val("");
		$('#address').val("");
		$('#phone').val("");

		console.log(getActualFullDate());

		var qty = '{{$qty->quantity}}';

		if (getActualFullDate() > '2021-09-16 12:00:00') {
		// if (parseInt(qty) > 250) {
			$("#form_anda").hide();

			$("#form_terimakasih").show();
			$("#form_terimakasih").html('<center style="font-size:16px"><span style="color:green;font-size:20px;font-weight:bold">Registrasi Telah Ditutup</span><br>Terimakasih telah ikut berpartisipasi dalam pendaftaran vaksin.<br>Silahkan tunggu informasi selanjutnya.<br>Tetap Jaga Protokol Kesehatan dan Sayangi Keluarga Anda.</center>');
		}

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
					$('#labeldept').hide();
					$('#department').hide();
			    $('#labelktp').show();
					$('#ktp').show();
			    $('#labelplace').show();
					$('#birth_place').show();
			    $('#labeldate').show();
					$('#birth_date').show();
			    $('#labeladdress').show();
					$('#address').show();
			    $('#labelphone').show();
					$('#phone').show();
					$('#keluarga').show();
					$.each(result.employee, function(key, value) {
						$('#name').val(value.name);
						$('#department').val(value.department);
						$('#ktp').val(value.card_id);
						$('#birth_place').val(value.birth_place);
						$('#birth_date').val(value.birth_date);
						$('#address').val(value.address);
						$('#phone').val(value.phone);
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
					$('#labeldept').hide();
					$('#department').hide();
			    $('#labelktp').show();
					$('#ktp').show();
			    $('#labelplace').show();
					$('#birth_place').show();
			    $('#labeldate').show();
					$('#birth_date').show();
			    $('#labeladdress').show();
					$('#address').show();
			    $('#labelphone').show();
					$('#phone').show();
					$('#keluarga').show();
					$.each(result.employee, function(key, value) {
						$('#name').val(value.name);
						$('#department').val(value.department);
						$('#ktp').val(value.card_id);
						$('#birth_place').val(value.birth_place);
						$('#birth_date').val(value.birth_date);
						$('#address').val(value.address);
						$('#phone').val(value.phone);
					});
			      }
			      else{
			        alert('NIK Tidak ditemukan');
			      }

		      });
		}else{
			$('#labelnama').hide();
			$('#name').hide();
			$('#birth_date').hide();
			$('#labeldept').hide();
			$('#department').hide();
			$('#labelplace').hide();
			$('#birth_place').val("");
			$('#labeldate').hide();
			$('#birth_date').val("");
		}
	}

	function daftarkeluarga(elem){

		var batas = elem.value;
		var divdata = "";

		$("#detail_keluarga").html("");

		for (var i = 1; i <= batas; i++) {

		divdata += '<div class="form-group row" style="margin-top: 20px !important;background-color: #b464f5;color: white;padding: 10px;margin:0;border-radius: 5px"><label class="col-xs-6 header-tab"><b>Anggota Keluarga (Opsional)</b></label></div><label class="label-input1002" id="labelkeluarga">Hubungan Keluarga</label><select class="form-control select2" data-placeholder="Pilih Hubungan Keluarga" id="hubungan'+i+'" name="hubungan'+i+'" style="width: 100%" required><option style="color:grey;" value="">Pilih Hubungan Keluarga</option><option value="Suami Istri">Suami / Istri</option><option value="Anak Kandung 1">Anak Kandung 1</option><option value="Anak Kandung 2">Anak Kandung 2</option><option value="Anak Kandung 3">Anak Kandung 3</option></select><label class="label-input1002" id="labelnama">Nama Lengkap</label><input type="text" class="form-control" id="name'+i+'" name="name'+i+'"><label class="label-input1002" id="labelktp">No KTP</label><input type="text" class="form-control" id="ktp'+i+'" name="ktp'+i+'"><label class="label-input1002" id="labeldate">Tempat Lahir <span style="color:red">*</span></label><input type="text" class="form-control" id="birth_place'+i+'" name="birth_place'+i+'"><label class="label-input1002" id="labeldate">Tanggal Lahir <span style="color:red">*</span></label><input type="text" class="form-control datepicker" readonly id="birth_date'+i+'" name="birth_date'+i+'"><label class="label-input1002" id="labeladdress">Alamat Sesuai KTP</label><input type="text" class="form-control" id="address'+i+'" name="address'+i+'"><label class="label-input1002" id="labelphone">Nomor HP</label><input type="text" class="form-control" id="phone'+i+'" name="phone'+i+'">';
		}

		$("#detail_keluarga").append(divdata);

		$('.datepicker').datepicker({
			autoclose: true,
			format: "dd-mm-yyyy",
			todayHighlight: true,
		});
	}

	function save() {
		$("#loading").show();

		if($("#employee_id").val() == "" || $("#name").val() == "" || $("#address").val() == "" || $("#phone").val() == "" || $("#jumlah_keluarga").val() == ""){
		    $("#loading").hide();
			openErrorGritter('Error!', 'Semua Data Harus Diisi. Pastikan Tertulis Dengan Benar');
			return false;
		}


		var arr_hubungan = [];
		var arr_name = [];
		var arr_ktp = [];
		var arr_birth_place = [];
		var arr_birth_date = [];
		var arr_address = [];
		var arr_phone = [];

		for(var i = 1;i <= $("#jumlah_keluarga").val(); i++){
			var hubungan = '#hubungan'+i;
			var name = '#name'+i;
			var ktp = '#ktp'+i;
			var birth_place = '#birth_place'+i;
			var birth_date = '#birth_date'+i;
			var address = '#address'+i;
			var phone = '#phone'+i;

			if ($(hubungan).val() == "" || $(name).val() == "" || $(ktp).val() == "" || $(birth_place).val() == "" || $(birth_date).val() == "" || $(address).val() == "" || $(phone).val() == "") {
				$("#loading").hide();
				openErrorGritter('Error!', 'Semua Kolom Harus Diisi.');
				return false;
			}
			
			arr_hubungan.push($(hubungan).val());
			arr_name.push($(name).val());
			arr_ktp.push($(ktp).val());
			arr_birth_place.push($(birth_place).val());
			arr_birth_date.push($(birth_date).val());
			arr_address.push($(address).val());
			arr_phone.push($(phone).val());
			
		}

		var data = {
			employee_id : $('#employee_id').val(),
			name : $('#name').val(),
			department : $('#department').val(),
			birth_place : $('#birth_place').val(),
			birth_date : $('#birth_date').val(),
			ktp : $('#ktp').val(),
			address : $('#address').val(),
			no_hp : $('#phone').val(),
			jumlah_keluarga : $('#jumlah_keluarga').val(),

			keluarga_hubungan : arr_hubungan,
			keluarga_name : arr_name,
			keluarga_ktp : arr_ktp,
			keluarga_birth_place : arr_birth_place,
			keluarga_birth_date : arr_birth_date,
			keluarga_address : arr_address,
			keluarga_phone : arr_phone,
		}

		$.post('{{ url("vaksin/registration/input") }}', data, function(result, status, xhr){
			if(result.status == true){    
				$("#loading").hide();
				openSuccessGritter("Success","Berhasil Dibuat");
				// location.reload();
				$("#form_anda").hide();

				$("#form_terimakasih").show();
				$("#form_terimakasih").html('<center style="font-size:16px"><span style="color:green;font-size:20px">Registrasi Berhasil</span><br>Terimakasih <b>'+$("#name").val()+'</b> telah ikut berpartisipasi dalam pelaksanaan vaksin<br>Tetap Jaga Protokol Kesehatan dan Sayangi Keluarga Anda.</center>');
				}
				else {
					$("#loading").hide();
				openErrorGritter('Error!', result.datas);
			}
		})
	}

	

	function getActualFullDate() {
		var d = new Date();
		var day = addZero(d.getDate());
		var month = addZero(d.getMonth()+1);
		var year = addZero(d.getFullYear());
		var h = addZero(d.getHours());
		var m = addZero(d.getMinutes());
		var s = addZero(d.getSeconds());
		return year + "-" + month + "-" + day + " " + h + ":" + m + ":" + s;
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

	function addZero(number) {
		return number.toString().padStart(2, "0");
	}
</script>

</html>