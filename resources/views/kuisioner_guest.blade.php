<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT. YMPI - Guest Assessment</title>
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
			background: url('ympi2.jpg') no-repeat fixed top;
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
		<div class="wrap-contact100 col-xs-12 col-md-5" style="padding:0 20px;">
			<div class="contact100-form-title">
				<img src="{{url('ympi.jpg')}}" style="width: 100%">
				<span class="contact100-form-title" style="color: white;padding-top: 20px;padding-bottom: 20px;background-color: #5b3a90;font-size: 20px">
					<center><b>PT. Yamaha Musical Products Indonesia</b></center>
				</span>

				<span class="contact100-form-title" style="font-size:18px;text-align: justify;padding:20px;background-color:#eee">
				PT. Yamaha Musical Products Indonesia memperhatikan keselamatan karyawan kami dan tamu. Kami memperhatikan dengan seksama perkembangan pandemi COVID19 dan demi memastikan keselamatan dan kesehatan lingkungan Kerja, maka kami meminta agar anda menjawab dengan jujur beberapa pertanyaan berikut ini. <br>YMPI?????????Covid-19????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? 
				</span>

				<span class="contact100-form-title" style="font-size:16px;text-align: left;padding:20px;">
					<i style="color: red"><b>NOTE:</b></i>
					<span style="color: red">Ketika anda berada di PT. YMPI maka wajib mengikuti protokol kesehatan yang berlaku.</span>
					<br>
					<span style="color: red">?????????YMPI???????????????????????????????????????????????????????????????????????????????????????</span>
					<br>
					<span  style="color: red;font-size: 14px !important;">
					<br><b>a.	Harus menggunakan masker medis serta faceshield dan atau masker N95. <br>????????????????????????+??????????????????????????????N95????????????????????????????????????
					<br>b.	Mematuhi protokol kesehatan di YMPI. <br>???????????????????????????????????????????????????????????????
					<ul>
						<li>&nbsp;&nbsp;&nbsp; 1.	Cek suhu dan melewati bilik sterilisasi di pos security
							<br>?????????????????????????????????????????????????????????????????????</li>
						<li>&nbsp;&nbsp;&nbsp; 2.	Menjaga jarak min 1,5m
							<br>??????1.5???????????????????????????????????????????????????</li>
						<li>&nbsp;&nbsp;&nbsp; 3.	Selalu mencuci tangan dan membawa sapu tangan pribadi
							<br>???????????????????????????????????????????????????????????????????????????</li>
						<li>&nbsp;&nbsp;&nbsp; 4.	Membawa peralatan ibadah dan peralatan makan pribadi
							<br>??????????????????????????????????????????</li>
						<li>&nbsp;&nbsp;&nbsp; 5.	Jika suhu tubuh > 37.5???C maka tidak diperbolehkan memasuki area PT. YMPI<br>
						?????????> 37.5???C?????????????????????YMPI????????????????????????????????? </li>
					</ul></b>
					</span>

					<br>Terima kasih atas kerjasamanya <br>??????????????????????????????????????????
					<br>
				</span>
			</div>
		</div>
		<div class="wrap-contact100 col-xs-12 col-md-6" style="padding: 0 20px;margin-left: 20px">
			<div id="belum_mengisi" style="width: 100%;">

				<span class="contact100-form-title" style="color: white;background-color: #605ca8;padding-bottom: 0;text-align: center;font-size: 2.0vw;font-weight: bold;margin-top: 20px;padding: 10px">
					Guest Self Assessment (GSA-COVID19)
				</span>

      			<input type="hidden" value="{{csrf_token()}}" name="_token" />
      			<input type="hidden" id="jml_pertanyaan" value="5">
				<label class="label-input1002" id="labelnama">Nama ??????</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">

				<label class="label-input1002" id="labeldept">Perusahaan ?????????</label>
				<input type="text" class="form-control" id="company" name="company" placeholder="Contoh : PT. YMPI">

				<label class="label-input1002" id="labeldept">Nomor Telepon ????????????</label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor Handphone">

				<label class="label-input1002" id="labeltanggaldari">Tanggal Dari ???????????????~????????????</label>
				<input type="text" class="form-control datepicker" id="date_from" name="date_from" placeholder=" Tanggal Kunjungan Dari">
				
				<label class="label-input1002" id="labeltanggalsampai">Tanggal Sampai ???????????????~????????????</label>
				<input type="text" class="form-control datepicker" id="date_to" name="date_to" placeholder=" Tanggal Kunjungan Sampai">

				<label class="label-input1002" id="labelreason">Keperluan ?????????</label>
				<input type="text" class="form-control" id="reason" name="reason" placeholder="Contoh : Perbaikan Mesin, Trial Project">

				<label class="label-input1002" id="labelpic">PIC YMPI YMPI????????????</label>
				<input type="text" class="form-control" id="pic" name="pic" placeholder="Contoh : Ani-HRGA">

				<label class="label-input1002" id="labellokasi">Asal Provinsi</label>
						<a href="javascript:void(0)" style="border-color: black; color: black;" id="btn_jakarta" onclick="btnCategory('jakarta')" class="btn btn-sm">Jakarta</a>
						<a href="javascript:void(0)" style="border-color: black; color: black;" id="btn_non_jakarta" onclick="btnCategory('non_jakarta')" class="btn btn-sm">Non Jakarta</a>
				<input type="hidden" id="createCategory">

				<label class="label-input1002" id="pertanyaan0">1. Apakah anda mungkin pernah kontak atau tinggal satu rumah dengan orang terkonfirmasi positif COVID19 dalam 14 hari terakhir ?????? 14?????????????????????????????????????????????????????????????????? ? <span style="color:red">*</span></label>

				<div class="validate-input" style="position: relative; width: 100%">
					<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya ??????
						<input type="radio"  id="jawaban0" name="jawaban0" value="Iya" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
					&nbsp;&nbsp;
					<label class="radio" style="margin-top: 5px">Tidak ?????????
						<input type="radio" id="jawaban0" name="jawaban0" value="Tidak" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
				</div>

				<label class="label-input1002" id="pertanyaan1">2. Apakah anda pernah bepergian ke luar negeri atau domestik antar provinsi dalam 14 Hari terakhir ??????14??????????????????????????????????????????????????? ? <span style="color:red">*</span></label>

				<div class="validate-input" style="position: relative; width: 100%">
					<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya ??????
						<input type="radio"  id="jawaban1" name="jawaban1" value="Iya" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
					&nbsp;&nbsp;
					<label class="radio" style="margin-top: 5px">Tidak ?????????
						<input type="radio" id="jawaban1" name="jawaban1" value="Tidak" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
				</div>

				<label class="label-input1002" id="pertanyaan2">3. Apakah anda akan melakukan pertemuan di dalam ruangan selama > 30 Menit 30???????????????????????????????????????????????????????????? ? <span style="color:red">*</span></label>

				<div class="validate-input" style="position: relative; width: 100%">
					<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya ??????
						<input type="radio"  id="jawaban2" name="jawaban2" value="Iya" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
					&nbsp;&nbsp;
					<label class="radio" style="margin-top: 5px">Tidak ?????????
						<input type="radio" id="jawaban2" name="jawaban2" value="Tidak" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
				</div>

				<label class="label-input1002" id="pertanyaan3">4. Apakah anda merasakan gejala ??? gejala seperti ????????????????????????????????? : <span style="color:red">*</span></label>
					<ul style="margin: 15px; padding: 10px">
						<li style="list-style-type: disc;">Demam (suhu badan > 37.5??C) ??????????????? > 37.5??C???</li>
						<li style="list-style-type: disc;">Batuk ??? batuk ???</li>
						<li style="list-style-type: disc;">Pernapasan cepat ?????????</li>
						<li style="list-style-type: disc;">Dahak kental (kuning ??? kehijauan) ??????</li>
						<li style="list-style-type: disc;">Badan terasa ngilu ?????????????????????????????????</li>
					</ul>

				<div class="validate-input" style="position: relative; width: 100%">
					<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya ??????
						<input type="radio"  id="jawaban3" name="jawaban3" value="Iya" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
					&nbsp;&nbsp;
					<label class="radio" style="margin-top: 5px">Tidak ?????????
						<input type="radio" id="jawaban3" name="jawaban3" value="Tidak" onclick="checkJawaban()">
						<span class="checkmark"></span>
					</label>
				</div>

				<label class="label-input1002" id="pertanyaan4">5. Apakah anda telah mendapatkan vaksin COVID19 COVID-19??????????????????????????????????????? ? <span style="color:red">*</span></label>

				<div class="validate-input" style="position: relative; width: 100%">
					<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya ??????
						<input type="radio"  id="jawaban4" name="jawaban4" value="Iya" onclick="changeJawaban(this.value)">
						<span class="checkmark"></span>
					</label>
					&nbsp;&nbsp;
					<label class="radio" style="margin-top: 5px">Tidak ?????????
						<input type="radio" id="jawaban4" name="jawaban4" value="Tidak" onclick="changeJawaban(this.value)">
						<span class="checkmark"></span>
					</label>
				</div>

				<div id="vaksin">
					<label class="label-input1002">Lampiran Sertifikat Vaksin <span style="color:red">*</span></label>

					<input type="file" name="file_vaksin" id="file_vaksin" value="Upload Bukti Vaksin">
				</div>

				<div id="pcr">
					<label class="label-input1002">Lampiran PCR <span style="color:red">*</span></label>

					<input type="file" name="file_pcr" id="file_pcr" value="Upload File PCR">
				</div>

				<div id="rapid">
					<label class="label-input1002">Lampirkan Hasil Rapid Antigen Maksimal H-3 Sebelum Tiba di PT. YMPI <span style="color:red">*</span></label>

					<input type="file" name="file_rapid" id="file_rapid" value="Upload Bukti Rapid">
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
				<br><br>
	      </div>
	      <div id="sudah_mengisi" style="width: 100%;padding: 170px 20px">
					<div class="col-xs-12 col-md-12">
          	<center style="font-size:16px">Terimakasih Bapak / Ibu <span class="name_assessment"></span> telah Mengisi Assessment ini. <div id="resiko_covid"></div></i></u></center>
          	</div>
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
		$('#sudah_mengisi').hide();
		$('#vaksin').hide();
		$('#rapid').hide();
		$('#pcr').hide();


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


		if ($('#createCategory').val() == "") {
			$("#loading").hide();
			openErrorGritter('Error!', 'Pastikan Kolom Kota Sudah Diisi');
			return false;
		}

		if ($('#createCategory').val() == "jakarta" && $('#file_pcr').val() == '') {
			$("#loading").hide();
			openErrorGritter('Error!', 'File PCR Harus Dilampirkan');
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
			if ($('#createCategory').val() == "jakarta"){

			}
			else{
				$("#loading").hide();
				openErrorGritter('Error!', 'Sertifikat Vaksin Harus Dilampirkan');
				return false;
			}
			
		}
		else if ($('input[id="jawaban4"]:checked').val() == "Tidak" && $('#file_rapid').val() == '' && ($('input[id="jawaban0"]:checked').val() == "Iya" || $('input[id="jawaban1"]:checked').val() == "Iya" || $('input[id="jawaban2"]:checked').val() == "Iya" || $('input[id="jawaban3"]:checked').val() == "Iya") ) {
			if ($('#createCategory').val() == "jakarta"){

			}
			else{
				$("#loading").hide();
				openErrorGritter('Error!', 'Hasil Rapid Antigen Harus Dilampirkan');
				return false;
			}
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
		formData.append('location', $('#createCategory').val());
		formData.append('question', pertanyaan);
		formData.append('answer', jawaban);

		formData.append('file_vaksin', $('#file_vaksin').prop('files')[0]);
		formData.append('file_rapid', $('#file_rapid').prop('files')[0]);
		formData.append('file_pcr', $('#file_pcr').prop('files')[0]);

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
			if ($('#createCategory').val() == "jakarta") {
				$('#pcr').show();
				$('#vaksin').hide();
				$('#rapid').hide();
			}else{
				$('#pcr').hide();
				$('#vaksin').show();
				$('#rapid').hide();
			}
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
				if ($('#createCategory').val() == "jakarta") {
					$('#pcr').show();
					$('#vaksin').hide();
					$('#rapid').hide();
				}else{
					$('#pcr').hide();
					$('#rapid').show();
					$('#rapid').hide();
				}
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

	function btnCategory(cat){
		
		$('#btn_jakarta').css('background-color', 'white');
		$('#btn_non_jakarta').css('background-color', 'white');
		$('#btn_'+cat).css('background-color', '#90ed7d');

		if (cat == "jakarta") {
			$('#pcr').show();
			$('#vaksin').hide();
			$('#rapid').hide();
		}else {
			$('#pcr').hide();
		}

		$('#createCategory').val(cat);
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