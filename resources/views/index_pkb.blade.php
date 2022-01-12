<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YMPI SURAT PERNYATAAN PKB</title>
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

	<style type="text/css">

		.container_checkmark {
		  display: block;
		  position: relative;
		  padding-left: 35px;
		  margin-bottom: 12px;
		  cursor: pointer;
		  font-size: 16px;
		  font-weight: bold;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}

		/* Hide the browser's default checkbox */
		.container_checkmark input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		  height: 0;
		  width: 0;
		}

		/* Create a custom checkbox */
		.checkmark_checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  background-color: #eee;
		}

		/* On mouse-over, add a grey background color */
		.container_checkmark:hover input ~ .checkmark_checkmark {
		  background-color: #ccc;
		}

		/* When the checkbox is checked, add a blue background */
		.container_checkmark input:checked ~ .checkmark_checkmark {
		  background-color: #2196F3;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark_checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		}

		/* Show the checkmark when checked */
		.container_checkmark input:checked ~ .checkmark_checkmark:after {
		  display: block;
		}

		/* Style the checkmark/indicator */
		.container_checkmark .checkmark_checkmark:after {
		  left: 9px;
		  top: 5px;
		  width: 5px;
		  height: 10px;
		  border: solid white;
		  border-width: 0 3px 3px 0;
		  -webkit-transform: rotate(45deg);
		  -ms-transform: rotate(45deg);
		  transform: rotate(45deg);
		}

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
				<input type="hidden" name="periode" id="periode">
				<span class="contact100-form-title" style="padding-bottom: 15px;text-align: center;font-weight: bold;font-size: 18px">
					PERJANJIAN KERJA BERSAMA<br>(PKB)<br>
					PERIODE {{$periode}}
				</span>
				<span class="contact100-form-title" style="padding-bottom: 15px;text-align: center;font-size: 18px;text-decoration: underline;">
					SURAT PERNYATAAN
				</span>

      			<input type="hidden" value="{{csrf_token()}}" name="_token" />
				<label class="label-input1002">Nomor Induk Karyawan (NIK) <span style="color:red">*</span></label>

				<input type="text" class="form-control" id="employee_id" name="employee_id" onkeyup="checkEmp(this.value)">
				<br>
				<div id="div_detail">
					<table>
						<tr>
							<td colspan="3">Saya yang bertandatangan di bawah ini :</td>
						</tr>
						<tr>
							<td style="width: 3%">Nama</td>
							<td style="width: 1%">:</td>
							<td style="width: 20%"><span id="nama"></span></td>
						</tr>
						<tr>
							<td>NIK</td>
							<td>:</td>
							<td><span id="nik"></span></td>
						</tr>
						<tr>
							<td>Grade /<br>Jabatan</td>
							<td>:</td>
							<td><span id="grade"></span> / <span id="jabatan"></span></td>
						</tr>
						<tr>
							<td>Bagian</td>
							<td>:</td>
							<td><span id="department"></span></td>
						</tr>
					</table>
					<br>	
					Menyatakan dengan sebenarnya bahwa saya telah menerima buku, membaca <br>
					dan mengerti isi Perjanjian Kerja Bersama ini. <br>
					Demikian pernyataan ini saya buat dengan sebenar-benarnya dan tanpa ada paksaan <br>
					dari pihak manapun. <br>
					<br>
					<br>
					Pasuruan, {{date('d F Y')}}
					<br>
					<br>
					<label class="container_checkmark" style="color: green">Menyetujui
					  <input type="checkbox" name="persetujuan" value="Menyetujui" checked="true">
					  <span class="checkmark_checkmark"></span>
					</label>
					<br>

					<span id="nama_bawah" style="text-decoration: underline;"></span>
				</div>

				<!-- demam, batuk, kejadian, tenggorokan sakit, sesak nafas, indera perasa & penciuman terganggu,  -->
			
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

<script type="text/javascript">
	jQuery(document).ready(function() {
		$('#div_detail').hide();
		$('#employee_id').val('');
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

		      $.get('{{ url("get_employee") }}',data, function(result, status, xhr){
			      if(result.status){
			      	$('#div_detail').show();
					$.each(result.employee, function(key, value) {
						$('#nama').html(value.name);
						$('#nama_bawah').html(value.name);
						$('#nik').html(value.employee_id);
						$('#department').html(value.department);
						$('#grade').html(value.grade_code);
						$('#jabatan').html(value.position);
					});
			      }
		      });
		}
		else if (value.length == 9) {
			var data = {
		      	employee_id:$('#employee_id').val()
		      }

		      $.get('{{ url("get_employee") }}',data, function(result, status, xhr){
			      if(result.status){
			      	$('#div_detail').show();
					$.each(result.employee, function(key, value) {
						$('#nama').html(value.name);
						$('#nama_bawah').html(value.name);
						$('#nik').html(value.employee_id);
						$('#department').html(value.department);
						$('#grade').html(value.grade_code);
						$('#jabatan').html(value.position);
					});
			      }
			      else{
			        alert('NIK Tidak ditemukan');
			      }

		      });
		}else{
			$('#div_detail').hide();
		}
	}


	function save() {
		$("#loading").show();

		if($("#employee_id").val() == ""){
		    $("#loading").hide();
			openErrorGritter('Error!', 'NIK Karyawan Harus Diisi. Pastikan NIK Terisi dengan benar.');
			return false;
		}

		var persetujuan = [];
		$("input[name='persetujuan']:checked").each(function (i) {
	            persetujuan[i] = $(this).val();
        });

		if (persetujuan.length == 0) {
			$("#loading").hide();
			openErrorGritter('Error!', 'Persetujuan Harus Diisi..');
			return false;
		}

		var data = {
			employee_id : $('#employee_id').val(),
			persetujuan : persetujuan[0],
			periode:'{{$periode}}'
		}

		$.post('{{ url("input/pkb") }}', data, function(result, status, xhr){
			if(result.status == true){    
				$("#loading").hide();
				openSuccessGritter("Success","Berhasil Menyetujui");
				location.reload();
			}
			else {
				$("#loading").hide();
				openErrorGritter('Error!', result.datas);
			}
		})
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