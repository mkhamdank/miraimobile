<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT. YMPI - Data Calon Karyawan</title>
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

		.container-contact100 {
			background: url('../ympi2.jpg') no-repeat fixed top;
		}

		.contact100-form-title {
			padding-top: 20px;
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

	<div class="container-contact100" style="align-items: start">
		<div class="wrap-contact100 col-xs-12 col-md-9" style="padding: 0 20px;margin-left: 20px">
			<div id="belum_mengisi" style="width: 100%;">
				<span class="contact100-form-title" style="color: white;background-color: #605ca8;padding-bottom: 0;text-align: center;font-size: 2.0vw;font-weight: bold;margin-top: 20px;padding: 10px">
						Data Calon Karyawan Baru PT. YMPI
					</span>

						<label class="col-xs-4 label-pad" style="font-weight: bold; text-align: left;"><span class="text-red">I. Keadaan Diri</span></label><br>
						<!-- <label class="label-input1002">A. Data Pribadi</label> -->
						<div id="data_pribadi">
							<button class="contact100-form-btn" style="width: 100%" onclick="DataPribadi()">A. DATA PRIBADI</button>
						</div><br>
						<div id="susunan_keluarga1">
							<button class="contact100-form-btn" style="width: 100%">B. SUSUNAN KELUARGA</button>
						</div><br>
						<div id="susunan keluarga2">
							<button class="contact100-form-btn" style="width: 100%">C. SUSUNAN KELUARGA</button>
						</div><br>
					<div id="isi_data_pribadi">
						<label class="label-input1002" style="text-align: left;" id="labelnama">Nama Lengkap</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">

						<label class="label-input1002" style="text-align: left;" id="labeljeniskelamin">Jenis Kelamin</label>
						<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Laki-Perempuan">

						<label class="label-input1002" style="text-align: left;" id="labelttl">Tempat Tanggal Lahir</label>
						<input type="text" class="form-control" id="ttl" name="ttl" placeholder="TTL">

						<label class="label-input1002" style="text-align: left;" id="labelagama">Agama</label>
						<input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">

						<label class="label-input1002" style="text-align: left;" id="labelkawin">Status Perkawinan</label>
						<input type="text" class="form-control" id="stat_kawin" name="stat_kawin" placeholder="Status Perkawinan">

						<label class="label-input1002" style="text-align: left;" id="labeltempattinggal">Alamat Tinggal Saat Ini</label>
						<input type="text" class="form-control" id="tempat_tinggal" name="tempat_tinggal" placeholder="Alamat Tinggal Saat Ini">

						<label class="label-input1002" style="text-align: left;" id="labelalamatasal">Alamat Asal</label>
						<input type="text" class="form-control" id="alamat_asal" name="alamat_asal" placeholder="Alamat Asal">

						<label class="label-input1002" style="text-align: left;" id="labelnohp">No Hand Phone</label>
						<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Hand Phone">

						<label class="label-input1002" style="text-align: left;" id="labelemail">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email">

						<label class="label-input1002" style="text-align: left;" id="labelnpwp">NPWP</label>
						<input type="text" class="form-control" id="npwp" name="npwp" placeholder="NPWP">

						<label class="label-input1002" style="text-align: left;" id="labelketenagakerjaan">BPJS Ketenagakerjaan</label>
						<input type="text" class="form-control" id="ketenagakerjaan" name="ketenagakerjaan" placeholder="BPJS Ketenagakerjaan">

						<label class="label-input1002" style="text-align: left;" id="labelkesehatan">BPJS Kesehatan</label>
						<input type="text" class="form-control" id="kesehatan" name="kesehatan" placeholder="BPJS Kesehatan">

						<label class="label-input1002" style="text-align: left;" id="labelsepatu">Ukuran Sepatu</label>
						<input type="text" class="form-control" id="sepatu" name="sepatu" placeholder="Ukuran Sepatu">

						<label class="label-input1002" style="text-align: left;" id="labelbaju">Ukuran Baju</label>
						<!-- <input type="text" style="width: 60%" class="form-control" id="baju" name="baju" placeholder="Ukuran Baju"> -->
						<select class="form-control select2" data-placeholder="Ukuran Baju" id="baju" name="baju" style="margin-top: 5px;margin-left: 1px;width:150px" required>
							<option style="color:grey;" value="">Ukuran Baju</option>
							<option value="XXL">XXL</option>
							<option value="XL">XL</option>
							<option value="L">L</option>
							<option value="M">M</option>
							<option value="S">S</option>
						</select>
					</div>

					<div id="isi_susunan_keluarga1">
						<label class="label-input1002">B. Susunan Keluarga</label>
						<label class="label-input1002">Suami/Istri & Anak</label>
						<div class="form-group row" style="position: relative; width: 100%">
							<label style="margin-top: 5px;margin-left: 5px">
								<input type="text" style="margin-top: 5px;margin-left: 10px;width:300px" class="form-control" id="nama_keluarga" name="nama_keluarga" placeholder="Nama Suami/Istri" required>
							</label>
							<label style="margin-top: 5px;margin-left: 1px">
								<select class="form-control select2" data-placeholder="L/P" id="kelamin_keluarga" name="kelamin_keluarga" style="margin-top: 5px;margin-left: 1px;width:100px" required>
									<option style="color:grey;" value="">L/P</option>
									<option value="L">L</option>
									<option value="P">P</option>
								</select>
							</label>
							<label style="margin-top: 5px;margin-left: 1px">
								<input type="text" style="margin-top: 5px;margin-left: 1px;width:200px" class="form-control" id="usia_keluarga" name="usia_keluarga" placeholder="Usia" required>
							</label>
							<label style="margin-top: 5px;margin-left: 1px">
								<input type="text" style="margin-top: 5px;margin-left: 1px;width:200px" class="form-control" id="pendidikan_keluarga" name="pendidikan_keluarga" placeholder="Pendidikan" required>
							</label>
						</div>
					</div>
					<br><br>
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
			// $('#sudah_mengisi').hide();
			// $('#vaksin').hide();
			// $('#rapid').hide();
			$('#isi_data_pribadi').hide();
			$('#isi_susunan_keluarga1').hide();


			$('.datepicker').datepicker({
				autoclose: true,
				format: "yyyy-mm-dd",
				todayHighlight: true,
			});
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		}); 

		function DataPribadi(){

		}

		function save() {
			$("#loading").show();


			if($("#name").val() == ""){
				$("#loading").hide();
				openErrorGritter('Error!', 'Pastikan Nama Lengkap Anda Sudah Diisi');
				return false;
			}

			if($("#company").val() == ""){
				$("#loading").hide();
				openErrorGritter('Error!', 'Pastikan Nama Perusahaan Anda Sudah Diisi');
				return false;
			}

			if($("#phone").val() == ""){
				$("#loading").hide();
				openErrorGritter('Error!', 'Pastikan Nomor Telepon Anda Sudah Diisi');
				return false;
			}

			if ($('input[id="jawaban0"]:checked').val() == "Iya") {
				$("#loading").hide();
				openErrorGritter('Error!', 'Mohon maaf Hasil Assessment Anda Telah Kami Tolak');
				return false;
			}
			else if ($('input[id="jawaban3"]:checked').val() == "Iya") {
				$("#loading").hide();
				openErrorGritter('Error!', 'Mohon maaf Hasil Assessment Anda Telah Kami Tolak');
				return false;
			}


			var pertanyaan = [];
			var jawaban = [];
			var jumlah_pertanyaan = $("#jml_pertanyaan").val();

			for(var i = 0;i < jumlah_pertanyaan; i++){
				var question = '#pertanyaan'+i;
				pertanyaan.push($(question).text());

				var answer = 'jawaban'+i;

				if ($('input[id="'+answer+'"]:checked').val() == null) {
					$("#loading").hide();
					openErrorGritter('Error!', 'Semua Kolom (<b>*</b>) Harus Diisi.');
					return false;
				}

				jawaban.push($('input[id="'+answer+'"]:checked').val());
			}

			if ($('input[id="jawaban4"]:checked').val() == "Iya" && $('#file_vaksin').val() == '') {
				$("#loading").hide();
				openErrorGritter('Error!', 'Sertifikat Vaksin Harus Dilampirkan');
				return false;
			}
			else if ($('input[id="jawaban4"]:checked').val() == "Tidak" && $('#file_rapid').val() == '' && ($('input[id="jawaban0"]:checked').val() == "Iya" || $('input[id="jawaban1"]:checked').val() == "Iya" || $('input[id="jawaban2"]:checked').val() == "Iya" || $('input[id="jawaban3"]:checked').val() == "Iya") ) {
				$("#loading").hide();
				openErrorGritter('Error!', 'Hasil Rapid Antigen Harus Dilampirkan');
				return false;
			}

			var formData = new FormData();

			formData.append('name', $('#name').val());				
			formData.append('company', $('#company').val());
			formData.append('phone', $('#phone').val());
			formData.append('date_from', $('#date_from').val());
			formData.append('date_to', $('#date_to').val());
			formData.append('reason', $('#reason').val());
			formData.append('pic', $('#pic').val());
			formData.append('phone', $('#phone').val());
			formData.append('question', pertanyaan);
			formData.append('answer', jawaban);

			formData.append('file_vaksin', $('#file_vaksin').prop('files')[0]);
			formData.append('file_rapid', $('#file_rapid').prop('files')[0]);

			$.ajax({
				url:"{{ url('post/guest_assessment') }}",
				method:"POST",
				data:formData,
				dataType:'JSON',
				contentType: false,
				cache: false,
				processData: false,
				success: function (response) {
					$("#name_assessment").val($('#name').val())
					$('#resiko_covid').html('Silahkan Datang ke PT. Yamaha Musical Products Indonesia dan Tetap Wajib Menjalankan Protocol Kesehatan.');

					openSuccessGritter("Success","Berhasil Dibuat");
					$("#loading").hide();

					$('#belum_mengisi').hide();
					$('#sudah_mengisi').show();
				},
				error: function (response) {
					console.log(response.datas);
				},
			})

		// var data = {
		// 	name : $('#name').val(),
		// 	company : $('#company').val(),
		// 	phone : $('#phone').val(),
		// 	question: pertanyaan,
		// 	answer: jawaban
		// }

		// $.post('{{ url("post/guest_assessment") }}', data, function(result, status, xhr){
		// 	if(result.status == true){
		// 		$("#name_assessment").val($('#name').val())
		// 		$('#resiko_covid').html('Mohon tunggu kabar selanjutnya dari kami');

		// 		openSuccessGritter("Success","Berhasil Dibuat");
  		//      $("#loading").hide();

		// 		$('#belum_mengisi').hide();
		// 		$('#sudah_mengisi').show();
		// 	}
		// 	else {
		// 		$("#loading").hide();
		// 		openErrorGritter('Error!', result.datas);
		// 	}
		// })
	}

	function changeJawaban(value) {
		if (value === 'Iya') {
			$('#vaksin').show();
			$('#rapid').hide();
		}
		else{
			$('#vaksin').hide();
			var jumlah_pertanyaan = $("#jml_pertanyaan").val();
			var stat = 0;
			
			for(var i = 0;i < jumlah_pertanyaan; i++){	
				var answer = 'jawaban'+i;

				if ($('input[id="'+answer+'"]:checked').val() == "Iya") {
					stat = 1;
				}
			}

			if (stat == 1) {	
				$('#rapid').show();
			}
			else{
				$('#rapid').hide();
			}
		}
	}

	function checkJawaban(){
		var jumlah_pertanyaan = $("#jml_pertanyaan").val();

		if ($('input[id="jawaban0"]:checked').val() == "Iya") {
			$("#loading").hide();
			openErrorGritter('Error!', 'Mohon maaf Hasil Assessment Anda Telah Kami Tolak');
			return false;
		}
		else if ($('input[id="jawaban3"]:checked').val() == "Iya") {
			$("#loading").hide();
			openErrorGritter('Error!', 'Mohon maaf Hasil Assessment Anda Telah Kami Tolak');
			return false;
		}
		
		if ($('input[id="jawaban4"]:checked').val() != "Iya") {
			if ($('input[id="jawaban0"]:checked').val() == "Iya" || $('input[id="jawaban1"]:checked').val() == "Iya" || $('input[id="jawaban2"]:checked').val() == "Iya" || $('input[id="jawaban3"]:checked').val() == "Iya") {
				$('#rapid').show();
			}
			else{
				$('#rapid').hide();
			}
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