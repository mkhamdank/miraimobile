<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MIRAI</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('logo_mirai_bundar.png')}}" />

	<link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('datatable/datatables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('datatable/buttons.dataTables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/jquery.gritter.css') }}" >

	<style type="text/css">
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}
		th {

			text-align: center;

		}

		/* Firefox */
		input[type=number] {
			-moz-appearance: textfield;
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




		.radio_box {
			/*display: inline-block;*/
			position: relative;
			padding-left: 35px;
			padding-top: 4px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 14px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			border: 1px solid rgba(0,0,0,0.1);
			height: 30px;
			background-color: #f2f2f2;
		}

		/* Hide the browser's default radio button */
		.radio_box input {
			position: absolute;
			opacity: 0;
			cursor: pointer;
		}

		.checkmark_box {
			position: absolute;
			top: 3px;
			left: 8px;
			height: 20px;
			width: 20px;
			background-color: #ccc;
		}


		/* On mouse-over, add a grey background color */
		.radio_box:hover input ~ .checkmark_box {
			background-color: #ccc;
		}

		/* When the radio button is checked, add a blue background */
		.radio_box input:checked ~ .checkmark_box {
			background-color: #2196F3;
		}

		/* Create the indicator (the dot/circle - hidden when not checked) */
		.checkmark_box:after {
			content: "";
			position: absolute;
			display: none;
		}

		/* Show the indicator (dot/circle) when checked */
		.radio_box input:checked ~ .checkmark_box:after {
			display: block;
		}

		/* Style the indicator (dot/circle) */
		.radio_box .checkmark_box:after {
			top: 6px;
			left: 6px;
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: white;
		}

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


	</style>
</head>
<body>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<div id="loading" style="margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(0,191,255); z-index: 30001; opacity: 0.8; display: none">
		<p style="position: absolute; color: White; top: 45%; left: 35%;">
			<span style="font-size: 20px">Loading, mohon tunggu . . . <i class="fa fa-spin fa-refresh"></i></span>
		</p>
	</div>

	<div id="loading2" style="margin: 0px; padding: 0px; position: fixed; right: 0px; top: 0px; width: 100%; height: 100%; background-color: rgb(0,191,255); z-index: 30001; opacity: 0.8; display: none">
		<p style="position: absolute; color: White; top: 45%; left: 45%;">
			<span style="font-size: 20px;">Processing...</i></span>
		</p>
	</div>

	<div class="limiter">
		<div class="container-login100" style="background-color: #ebeeef !important">
			<div class="wrap-login100">
				<!-- <div class="login100-form-title" style="background-image: url(images/bg2.JPG) !important;">

				</div> -->
				<br>
				<div id="keterangan_umum">
					<span class="login100-form-title-1" style="color: black" id="laporan_harian">
					</span>
					<br>
					<span class="login100-form-title-2" style="color: black" id="laporan_harian">
						<center>Pengisian <b style="color: red">Laporan Kesehatan dan Survey</b> 
							<!-- <br>saat mengisi <i style="color: red">Laporan Kesehatan</i>.</center> -->
						</span>
					</div>

					<div>
						<hr>
						<form class="login100-form validate-form" id="form_login">
							{{ csrf_field() }}
							<div class="wrap-input100 validate-input m-b-26" data-validate="Username Harus Diisi.">
								<span class="label-input100 {{ $errors->has('username') ? ' has-error' : '' }}">Nomor Induk Karyawan</span>
								<input class="input100" type="text" name="username" id="username" placeholder="Masukkan Nomor Induk Karyawan" required="">
								<span class="focus-input100"></span>
							</div>

							<div class="wrap-input100 validate-input m-b-26" data-validate="Password Harus Diisi.">
								<span class="label-input100 {{ $errors->has('password') ? ' has-error' : '' }}">Password</span>
								<input class="input100" type="password" name="password" id="password" placeholder="Masukkan Password" required="">
								<span class="focus-input100"></span>
							</div>

							<div class="container-login100-form-btn" style="color: red; display: none" id="notif">
								<i class="fa fa-close"></i> &nbsp; Username atau Password Salah.
							</div>
							<button class="contact100-form-btn" onclick="login()" style="display: inline-block;">
								<span>
									Login
									<i class="fa fa-arrow-right"></i>
								</span>
							</button>
						</form>

						<div class="login100-form validate-form" id="notification">
						<!-- <span><i style="color: red"><b>NOTE:</b></i><br>
							Pengisian Laporan Harian periode <b>30 Juni - 31 Juli 2020</b> dengan ketentuan sebagai berikut.<br>
							<br>
							<b>WOC </b>(Shift 1 / Hanya Cek Suhu Tubuh di Masing-Masing Bagian)
							<br>
							<br>
							<b>SBH </b>(Shift 1 / Suhu Tubuh Opsional)<br>
							Laporan <b>1</b>         : <b>06.00 - 07.00</b> WIB.
							<br>
							Laporan <b>2</b>         : <b>16.00 - 17.00</b> WIB.
							<br>
							Laporan <b>2 (Jumat)</b> : <b>16.30 - 17.30</b> WIB.
							<br>
						</span> -->
					</div>

					<div class="login100-form validate-form" id="form_reset" style="display: none">
						{{ csrf_field() }}
						<input type="hidden" id="employee_id_reset">

						<div class="wrap-input100 validate-input m-b-26">
							<span class="label-input100">Nama Karyawan</span>
							<input class="input100" type="text" name="emp_name" id="emp_name" placeholder="" required="" readonly>
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26">
							<span class="label-input100">Password Baru</span>
							<input class="input100" type="password" name="password_reset" id="password_reset" placeholder="Masukkan Password Baru" required="">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-26">
							<span class="label-input100">Ulangi Password Baru</span>
							<input class="input100" type="password" name="password_reset2" id="password_reset2" placeholder="Ulangi Password Baru" required="">
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn" style="color: red; display: none" id="notif_reset">
							<i class="fa fa-close"></i> &nbsp; Password Tidak Sama.
						</div>
						<br>
						<br>
						<button class="contact100-form-btn" onclick="reset()" style="display: inline-block;">
							<span>
								Confirm
								<i class="fa fa-arrow-right"></i>
							</span>
						</button>
						<button class="contact1002-form-btn" type="button" onClick="window.location.reload();" style="display: inline-block;">
							<span>
								Cancel
								<i class="fa fa-times"></i>
							</span>
						</button>
					</div>

					<div class="menu100-form" id="form_menu" style="display: none; width: 100%; padding-left: 40px; padding-right: 10px;">
						<div class="row" style="width: 100%; padding-top: 5px;">
							<button class="btn btn-primary" onclick="tab(1)" style="text-align: center; width: 100%;">Laporan Kesehatan</button>						
						</div>
							{{-- <div class="row" style="width: 100%; padding-top: 5px;display: inline">
								<center>
								<span style="color: red">Pengisian Laporan Harian Karyawan Menggunakan <b>Aplikasi Greatday</b></span>
								</center>
							</div> --}}
							<br><br>
							<!-- <div class="row" style="width: 100%; padding-top: 5px;">-->
								<!--	<button class="btn btn-primary" onclick="tab(2)" style="text-align: center; width: 100%;">Informasi Grup Kerja</button>	-->
								<!--</div> -->
							<!-- <div class="row" style="width: 100%; padding-top: 5px;">
								<button class="btn btn-primary" onclick="tab(3)" style="text-align: center; width: 100%;">Pengumuman</button>						
							</div> -->
							<!--<div class="row" style="width: 100%; padding-top: 5px;">-->
								<!--	<button class="btn btn-primary" onclick="tab(4)" style="text-align: center; width: 100%;">Data Kehadiran</button>						-->
								<!--</div>-->
								<div class="row" style="width: 100%; padding-top: 5px;">
									<button class="btn btn-primary" onclick="tab(5)" style="text-align: center; width: 100%;">Survey Penilaian Resiko Covid</button>
								</div>

								<div class="row" style="width: 100%; padding-top: 5px;" id="btn-survey-stocktaking">
									<button class="btn btn-primary" onclick="tab(7)" style="text-align: center; width: 100%;">Survey Stocktaking</button>
								</div>
								<div class="row" style="width: 100%; padding-top: 5px;">
									<button class="btn btn-primary" onclick="tab(6)" style="text-align: center; width: 100%;">Surat Pernyataan PKB</button>
								</div>
							</div>


							<form class="contact100-form validate-form" style="padding: 0px 25px 58px 25px;display: none" id="form_anda">
								{{ csrf_field() }}
								<label class="label-input1002">
									<label style="color: purple"> NIK : <span id="employee_id"></span></label>
									<label style="color: purple"> Nama : <span id="name"></span></label><br>
									<input type="hidden" id="department">
									<p style="color: black;font-size: 100%;font-weight: bold"> Bagaimana Kondisi ANDA Hari Ini? </p>
								</label>

								<label class="label-input1002"><span id="pertanyaan0">Demam</span> ? <span style="color:red">*</span></label>

								<div class="validate-input" style="position: relative; width: 100%">
									<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya
										<input type="radio" id="jawaban0" name="jawaban0" value="Iya" required="">
										<span class="checkmark"></span>
									</label>
									&nbsp;&nbsp;
									<label class="radio" style="margin-top: 5px">Tidak
										<input type="radio" id="jawaban0" name="jawaban0" value="Tidak">
										<span class="checkmark"></span>
									</label>
								</div>

								<label class="label-input1002"><span id="pertanyaan_suhu">Suhu Tubuh</span> ? <span style="color:red">*</span></label>

								<div class="wrap-input100" style="width: 80%" >
									<input class="input100" type="number" name="suhu" id="suhu" placeholder="Suhu (Contoh: 37.5)" required="">
									<span class="label-inputspecial" style="left: 200px;bottom: 10px">&deg; C</span>
								</div>

								<label class="label-input1002"><span id="pertanyaan1">Batuk</span> ? <span style="color:red">*</span></label>

								<div class="validate-input" style="position: relative; width: 100%">
									<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya
										<input type="radio" id="jawaban1" name="jawaban1" value="Iya" required="">
										<span class="checkmark"></span>
									</label>
									&nbsp;&nbsp;
									<label class="radio" style="margin-top: 5px">Tidak
										<input type="radio" id="jawaban1" name="jawaban1" value="Tidak">
										<span class="checkmark"></span>
									</label>
								</div>
								<label class="label-input1002"><span id="pertanyaan2">Pusing</span> ? <span style="color:red">*</span></label>

								<div class="validate-input" style="position: relative; width: 100%">
									<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya
										<input type="radio" id="jawaban2" name="jawaban2" value="Iya" required="">
										<span class="checkmark"></span>
									</label>
									&nbsp;&nbsp;
									<label class="radio" style="margin-top: 5px">Tidak
										<input type="radio" id="jawaban2" name="jawaban2" value="Tidak">
										<span class="checkmark"></span>
									</label>
								</div>
								<label class="label-input1002"><span id="pertanyaan3">Tenggorokan Sakit</span> ? <span style="color:red">*</span></label>

								<div class="validate-input" style="position: relative; width: 100%">
									<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya
										<input type="radio" id="jawaban3" name="jawaban3" value="Iya"  required="">
										<span class="checkmark"></span>
									</label>
									&nbsp;&nbsp;
									<label class="radio" style="margin-top: 5px">Tidak
										<input type="radio" id="jawaban3" name="jawaban3" value="Tidak">
										<span class="checkmark"></span>
									</label>
								</div>

								<label class="label-input1002"><span id="pertanyaan4">Sesak Nafas</span> ? <span style="color:red">*</span></label>

								<div class="validate-input" style="position: relative; width: 100%">
									<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya
										<input type="radio" id="jawaban4" name="jawaban4" value="Iya" required="">
										<span class="checkmark"></span>
									</label>
									&nbsp;&nbsp;
									<label class="radio" style="margin-top: 5px">Tidak
										<input type="radio" id="jawaban4" name="jawaban4" value="Tidak">
										<span class="checkmark"></span>
									</label>
								</div>

								<label class="label-input1002"><span id="pertanyaan5">Indera Perasa & Penciuman Terganggu</span> ? <span style="color:red">*</span></label>

								<div class="validate-input" style="position: relative; width: 100%">
									<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya
										<input type="radio" id="jawaban5" name="jawaban5" value="Iya" required="">
										<span class="checkmark"></span>
									</label>
									&nbsp;&nbsp;
									<label class="radio" style="margin-top: 5px">Tidak
										<input type="radio" id="jawaban5" name="jawaban5" value="Tidak">
										<span class="checkmark"></span>
									</label>
								</div>

								<label class="label-input1002"><span id="pertanyaan6">Pernah Berinteraksi dengan Suspect / Positif COVID-19</span> ? <span style="color:red">*</span></label>

								<div class="validate-input" style="position: relative; width: 100%">
									<label class="radio" style="margin-top: 5px;margin-left: 5px">Iya
										<input type="radio" id="jawaban6" name="jawaban6" value="Iya" required="">
										<span class="checkmark"></span>
									</label>
									&nbsp;&nbsp;
									<label class="radio" style="margin-top: 5px">Tidak
										<input type="radio" id="jawaban6" name="jawaban6" value="Tidak">
										<span class="checkmark"></span>
									</label>
								</div>

								{{-- <label class="label-input1002" style="color: red;font-size: 16px">*Semoga Kita Selalu Diberikan Kesehatan<span style="color:red"></span></label> --}}

								<input type="hidden" id="jml_pertanyaan" value="7">

								<div class="container-contact100-form-btn" style="margin-top: 30px;">
									<button class="contact100-form-btn" type="button" onclick="submitForm()" style="display: inline-block;">
										<span>
											Submit
											<i class="fa fa-arrow-right"></i>
										</span>
									</button>
									<button class="contact1002-form-btn" type="button" onclick="cancel('form_anda')" style="display: inline-block;">
										<span>
											<i class="fa fa-arrow-left"></i>
											Back To Home
										</span>
									</button>
								</div>
								<input type="hidden" name="latitude" id="latitude">
								<input type="hidden" name="longitude" id="longitude">
							</form>

							<div id="form_pkb" style="display: none;padding: 0px 10px 58px 10px;">
								<input type="hidden" name="periode" id="periode" value="{{$periode}}">
								<span class="contact100-form-title" style="padding-bottom: 15px;text-align: center;font-weight: bold;font-size: 18px">
									PERJANJIAN KERJA BERSAMA<br>(PKB)<br>
									PERIODE {{$periode}}
								</span>
								<div id="pkb">
									<div id="div_pertanyaan">
										<span class="contact100-form-title" style="padding-bottom: 15px;text-align: center;font-weight: bold;font-size: 18px">
											PERTANYAAN
										</span>
								<!-- <span>
									Silahkan Baca terlebih dahulu Buku PKB yang telah Anda dapatkan dari bagian HR.<br>
									Jika sudah dirasa mengerti, Anda harus menjawab beberapa pertanyaan di bawah ini.<br>
								</span> -->
								<br><?php $pkb_question_total = count($pkb_question) ?>
								<?php if (count($pkb_question) > 0): ?>
								<?php $no = 0; ?>
								@foreach($pkb_question as $pkb_question)
								<div id="div_pkb_question_<?= $no ?>" style="display: none;">
									<label class="label-input1002" style="color: purple;margin-top: 0px;font-size: 14px"><span id="pkb_question_<?= $no ?>">{{$no+1}}. {{ $pkb_question->question }}</span></label>

									<?php $pkb_answer = explode('_', $pkb_question->answer) ?>

									<?php for ($i=0; $i < count($pkb_answer); $i++) { ?>
									<div class="validate-input" style="position: relative; width: 100%">
										<label class="radio_box" style="margin-top: 5px;font-size: 12px">{{$pkb_answer[$i]}}
											<input type="radio" id="pkb_answer_{{$no}}" name="pkb_answer_{{$no}}" value="{{$pkb_answer[$i]}}">
											<span class="checkmark_box"></span>
										</label>
									</div>
									<?php } ?>
									<input type="hidden" name="pkb_right_answer_{{$no}}" id="pkb_right_answer_{{$no}}" value="{{$pkb_question->right_answer}}">
									<br>
								</div>
								<div id="div_pkb_discussion_<?= $no ?>" style="display: none;">
									<center><span id="pkb_announcement_<?= $no ?>" style="font-weight: bold;font-size: 20px"></span></center>
									<br>
									<center><span style="font-weight: bold;font-size: 20px">Pembahasan</span></center>
									<?php echo $pkb_question->discussion ?></span></label>
									<br>
								</div>
								<button class="contact100-form-btn" type="button" id="btn_pkb_submit_<?= $no ?>" onclick="submitPkbQuestion('{{$no}}')" style="display: inline-block;float: right;display: none;">
									<span>
										Submit
										<i class="fa fa-arrow-right"></i>
									</span>
								</button>
								<button class="contact1002-form-btn" type="button" id="btn_pkb_back_<?= $no ?>" onclick="backPkbQuestion('{{$no}}')" style="display: inline-block;float: right;display: none;">
									<span>
										Back
										<i class="fa fa-arrow-right"></i>
									</span>
								</button>
								<button class="contact100-form-btn" type="button" id="btn_pkb_next_<?= $no ?>" onclick="nextPkbQuestion('{{$no}}')" style="display: inline-block;float: right;display: none;">
									<span>
										Next
										<i class="fa fa-arrow-right"></i>
									</span>
								</button>
								<?php $no++ ?>
								@endforeach
								<?php endif ?>

								<button class="contact100-form-btn" type="button" id="btn_pkb_submit_all" onclick="submitPkbQuestionAll()" style="display: inline-block;float: right;display: none;">
									<span>
										Submit
										<i class="fa fa-arrow-right"></i>
									</span>
								</button>
							</div>
						</div>
						<div id="surat_pernyataan">
							<span class="contact100-form-title" style="padding-bottom: 15px;text-align: center;font-size: 18px;text-decoration: underline;">
								SURAT PERNYATAAN
							</span>

							<input type="hidden" value="{{csrf_token()}}" name="_token" />
							<div id="div_detail" style="display: none;">
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
										<td><span id="department_pkb"></span></td>
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
								<button class="contact100-form-btn" type="button" onclick="savePkb()" style="display: inline-block;">
									<span>
										Submit
										<i class="fa fa-arrow-right"></i>
									</span>
								</button>
									<!-- <button class="contact1002-form-btn" type="button" onclick="cancel('form_pkb')" style="display: inline-block;">
										<span>
											<i class="fa fa-arrow-left"></i>
											Back To Home
										</span>
									</button> -->
								</div>
							</div>

							<div id="div_detail_belum" style="margin-top: 20px">
								<center><span style="font-size: 18px;text-align: center;font-weight: bold;">
									<?php date_default_timezone_set('Asia/Jakarta'); ?>
									Maaf, fitur ini masih dalam pengembangan.
								</span></center>
							</div>

							<div id="div_detail_sudah" style="margin-top: 20px">
								<center><span style="font-size: 18px;text-align: center;color: green">
									<?php date_default_timezone_set('Asia/Jakarta'); ?>
									Terimakasih, Anda telah menyetujui <br><span style="font-weight: bold;">Surat Pernyataan</span><br> pada<br>
									<span id="tanggal_pkb" style="font-weight: bold;"></span>
								</span></center>
							</div>
						</div>


						<form class="contact100-form validate-form" style="padding: 0px 25px 58px 25px;display: none" id="form_grup">
							{{ csrf_field() }}

							<h3>Informasi Grup Kerja</h3>

							<label class="label-input1002">
								<label style="font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif"> Masukkan NIK </label>
							</label>

							<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0">
								<div class="form-group">
									<input type="text" class="form-control pull-right" id="nik_grup" name="nik_grup" placeholder="Nomor Induk Karyawan">
								</div>
							</div>

							<label class="label-input1002">
								<label style="font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif"> Masukkan Kode </label>
							</label>
							<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0">
								<div class="form-group">
									<!-- <input type="text" class="form-control pull-right" id="departemen" name="departemen" placeholder="Departemen"> -->
									<select class="form-control select2" style="width: 100%;" id="kode_grup" name="kode_grup" data-placeholder="Pilih Kode" required>
										<option value=""></option>
										<option value="0fc">Office</option>
										<option value="AP">Assembly</option>
										<option value="CTN">Canteen</option>
										<option value="Drv">Driver</option>
										<option value="EI">Educational Instrument</option>
										<option value="GS">General Service</option>
										<option value="Jps">Japanese</option>
										<option value="PE">Production Engineering</option>
										<option value="MNTC">Maintenance</option>
										<option value="PP">Part Process</option>
										<option value="QA">Quality Assurance</option>
										<option value="WH">Warehouse</option>
										<option value="WST">Welding Surface Treatment</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3" style="padding-left: 0">
								<button class="btn btn-success" type="button" onClick="fillTable()" style="display: inline-block;margin-top: 10px">
									<span>
										Cari
									</span>
								</button>
							</div>
							
							<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left: 0;overflow-x: scroll;">
								<table id="tableResult" class="table table-bordered table-striped table-hover" style="overflow-x: scroll;border-collapse: collapse !important">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Tanggal</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody id="tableBodyResult">
									</tbody>
									<!--<tfoot>-->
										<!--  <tr>-->
											<!--    <th></th>-->
											<!--    <th></th>-->
											<!--    <th></th>-->
											<!--    <th></th>-->
											<!--  </tr>-->
											<!--</tfoot>-->
										</table>
										<p style="color: red" id="geser" style="display: none">*Geser ke kanan untuk melihat detail</p> 
									</div>

									<div class="container-contact100-form-btn" style="margin-top: 30px;">
										<button class="contact1002-form-btn" type="button" onclick="cancel('form_grup')" style="display: inline-block;">
											<span>
												<i class="fa fa-arrow-left"></i>
												Back To Home
											</span>
										</button>
									</div>

								</form>

								<form class="contact100-form validate-form" style="padding: 0px 25px 58px 25px;display: none" id="form_pengumuman">
									{{ csrf_field() }}

									<h3>Pengumuman</h3>

									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left: 0;overflow-x: scroll;">
										<table id="tableResultPengumuman" class="table table-bordered table-striped table-hover" style="overflow-x: scroll;border-collapse: collapse !important">
											<thead>
												<tr>
													<th>Tanggal</th>
													<th>Pengumuman</th>
												</tr>
											</thead>
											<tbody id="tableBodyResultPengumuman">
											</tbody>
										</table>
									</div>

									<div class="container-contact100-form-btn" style="margin-top: 30px;">
										<button class="contact1002-form-btn" type="button" onclick="cancel('form_pengumuman')" style="display: inline-block;">
											<span>
												<i class="fa fa-arrow-left"></i>
												Back To Home
											</span>
										</button>
									</div>
								</form>

								<form class="contact100-form validate-form" style="padding: 0px 25px 58px 25px;display: none" id="form_kehadiran">
									{{ csrf_field() }}

									<h3>Data Kehadiran</h3>

									<div class="col-md-12 col-sm-12 col-xs-12" style="padding-left: 0;overflow-x: scroll;">
										<table id="tableResultKehadiran" class="table table-bordered table-striped table-hover" style="overflow-x: scroll;border-collapse: collapse !important">
											<thead>
												<tr>
													<th>Tanggal</th>
													<th>NIK</th>
													<th>Nama</th>
													<th>Jam Masuk</th>
													<th>Location Masuk</th>
													<th>Jam Keluar</th>
													<th>Location Keluar</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody id="tableBodyResultKehadiran">
											</tbody>
										</table>
									</div>

									<div class="container-contact100-form-btn" style="margin-top: 30px;">
										<button class="contact1002-form-btn" type="button" onclick="cancel('form_kehadiran')" style="display: inline-block;">
											<span>
												<i class="fa fa-arrow-left"></i>
												Back To Home
											</span>
										</button>
									</div>
								</form>

								<form class="bye-form" id="form_terimakasih" style="display: none" >
								</form>

								<form class="contact100-form validate-form" style="padding: 0px 25px 58px 25px;display: none" id="form_belum_survey">
									<div style="width: 100%;">
										<div class="col-xs-12 col-md-12">
											<center style="font-size:16px">Dear <span class="name_survey"></span><br>Survey Dapat Diisi Pada <span style="color: red">Selasa, 01 Februari 2022 Pukul 12:00 - 18:00 </span> <br></center>
										</div>
									</div>

									<div class="container-contact100-form-btn" style="margin-top: 30px;">
										<button class="contact1002-form-btn" type="button" onclick="cancel('form_belum_survey')" style="display: inline-block;">
											<span>
												<i class="fa fa-arrow-left"></i>
												Back To Home
											</span>
										</button>
									</div>
								</form>


								<form class="contact100-form validate-form" style="padding: 0px 25px 58px 25px;display: none" id="form_survey">
									<div id="belum_survey" style="width: 100%;">
										{{ csrf_field() }}
										<label class="label-input1002" style="margin-top: 0">
											<center>
												<label style="color: purple;font-size: 18px;"> NIK : <span id="employee_id_survey"></span></label>
												<label style="color: purple;font-size: 18px;"> Nama : <span id="name_survey" class="name_survey"></span></label><br>
												<input type="hidden" id="department_survey">
											</center>
										</label>


										<div class="col-xs-12 col-md-12">


											<?php 
											$jml_pertanyaan_survey = count($question);
											?>

											<input type="hidden" id="jml_pertanyaan_survey" value="<?= $jml_pertanyaan_survey ?>">

											<table id="tableQuestion" class="table table-bordered table-striped table-hover" style="overflow-x: scroll;border-collapse: collapse !important;width: 100%">
												<thead>
													<tr style="background-color: #a488aa;color: white">
														<th>PENILAIAN RESIKO PRIBADI TERKAIT COVID-19</th>
													</tr>
												</thead>
												<tbody id="">

													<?php 
													$no = 0; 
													?>

													@foreach($question as $qs)
													<tr class="tab_{{$no+1}}" id="tab_{{$no+1}}">
														<td>
															<label class="label-input1002" style="color: purple;margin-top: 0px;text-align: center;font-size: 14px"><span id="pertanyaan_survey<?= $no ?>">{{ $qs->pertanyaan }}</span></label>

															<div class="validate-input" style="position: relative; width: 100%">
																<label class="radio_box" style="margin-top: 5px">Ya
																	<input type="radio" id="jawabansurvey{{$no}}" name="jawabansurvey{{$no}}" value="Ya">
																	<span class="checkmark_box"></span>
																</label>

																<?php if ($no+1 != 1 && $no+1 != 16 && $no+1 != 19 && $no+1 != 20 && $no+1 != 21 && $no+1 != 22 && $no+1 != 23 && $no+1 != 24) { ?> 

																<label class="radio_box" style="margin-top: 5px">Kadang
																	<input type="radio" id="jawabansurvey{{$no}}" name="jawabansurvey{{$no}}" value="Kadang">
																	<span class="checkmark_box"></span>
																</label>

																<?php } ?>

																<label class="radio_box" style="margin-top: 5px">Tidak
																	<input type="radio" id="jawabansurvey{{$no}}" name="jawabansurvey{{$no}}" value="Tidak">
																	<span class="checkmark_box"></span>
																</label>
															</div>
															<div class="validate-input" style="position: relative; width: 100%">
																<?php 
																if ($no+1 != 1) { ?>
																<button id="back_{{$no+1}}" class="contact1002-form-btn" type="button" onclick="backSurvey(this.id)" style="display: inline-block;background-color: red !important">
																	<span>
																		Back
																		<i class="fa fa-arrow-left"></i>
																	</span>
																</button>
															<?php }
															?>


															<?php 
															if ($no+1 != $jml_pertanyaan_survey) { ?>
															<button id="next_{{$no+1}}" class="contact100-form-btn" type="button" onclick="nextSurvey(this.id)" style="display: inline-block;float: right">
																<span>
																	Next
																	<i class="fa fa-arrow-right"></i>
																</span>
															</button>
															<?php } else { ?>

															<!-- <tr>
											              		<td>
											              			<div class="validate-input" style="position: relative; width: 100%"> -->
											              				<button class="contact100-form-btn" type="button" onclick="submitSurvey()" style="display: inline-block;float: right;">
											              					<span>
											              						Submit
											              						<i class="fa fa-arrow-right"></i>
											              					</span>
											              				</button>
																	<!-- </div>
											              		</td>
											              	</tr> -->
											              <?php }
											              ?>

											          </div>
											          <?php 
											          if ($no+1 == 1) { ?>

											          <div class="validate-input" style="width: 100%;">
											          	<span style="font-weight: bold;margin-top: 40px;">Page {{$no+1}} of {{$jml_pertanyaan_survey}}</span>
											          </div>

											          <?php } else { ?>

											          <div class="validate-input" style="width: 100%;">
											          	<span style="font-weight: bold;margin-top: 20px;float: right;">Page {{$no+1}} of {{$jml_pertanyaan_survey}}</span>
											          </div>

											          <?php
											      }
											      $no++;
											      ?>
											  </td>

											</tr>


											@endforeach

										</tbody>
									</table>
								</div>
							</div>
							<br>
							<div id="sudah_survey" style="width: 100%">
								<div class="col-xs-12 col-md-12">
									<center style="font-size:16px">Terimakasih <span class="name_survey"></span> telah mengisi laporan survey ini pada <span style="color: red"><div id="waktu_covid"></div></span><div id="resiko_covid"></div></center>
								</div>
							</div>
							
							<div class="container-contact100-form-btn" style="margin-top: 30px;">
								<button class="contact1002-form-btn" type="button" onclick="cancel('form_survey')" style="display: inline-block;">
									<span>
										<i class="fa fa-arrow-left"></i>
										Back To Home
									</span>
								</button>
							</div>
						</form>


						<form class="contact100-form validate-form" style="padding: 0px 25px 58px 25px; display: none" id="stocktaking_survey_form">
							<div id="stocktaking_survey_not_yet" style="width: 100%;">
								{{ csrf_field() }}
								<label class="label-input1002" style="margin-top: 0">
									<center>
										<label style="color: purple;font-size: 18px;"> NIK : <span id="stocktaking_survey_employee_id"></span></label>
										<label style="color: purple;font-size: 18px;"> Nama : <span id="stocktaking_survey_name"></span></label><br>
										<input type="hidden" id="stockaking_survey_department">
									</center>
								</label>
								

								<div class="col-xs-12 col-md-12">

									
									@php
									$stocktaking_survey_count = count($st_question);
									@endphp

									<input type="hidden" id="stocktaking_survey_count" value="{{ $stocktaking_survey_count }}">

									<table id="tableStocktakingSurvey" class="table table-bordered table-striped table-hover" style="overflow-x: scroll;border-collapse: collapse !important;width: 100%">
										<thead>
											<tr style="background-color: #a488aa;color: white">
												<th>PENILAIAN PEMAHAMAN USER TERKAIT STOCKTAKING</th>
											</tr>
										</thead>
										<tbody id="">

											@php $no = 0; @endphp

											@foreach($st_question as $qs)
											<tr class="stocktaking_tab_{{ $no+1 }}" id="stocktaking_tab_{{ $no+1 }}">
												<td>
													<center>
														<img style="max-width: 80%;" id="image_question_{{ $no+1 }}" src="{{ url( 'stocktaking/' . $qs->image ) }}" alt="{{ $qs->image }}">
													</center>
													<label class="label-input1002" style="color: purple;margin-top: 0px;text-align: center;font-size: 14px"><span id="survey_question_{{ $no }}">{{ $qs->question }}</span>
													</label>

													<div class="validate-input" style="position: relative; width: 100%">
														<label class="radio_box" style="margin-top: 5px">Ya
															<input type="radio" id="survey_answer_{{ $no }}" name="survey_answer_{{ $no }}" value="Ya">
															<span class="checkmark_box"></span>
														</label>

														<label class="radio_box" style="margin-top: 5px">Tidak
															<input type="radio" id="survey_answer_{{ $no }}" name="survey_answer_{{ $no }}" value="Tidak">
															<span class="checkmark_box"></span>
														</label>
													</div>
													<div class="validate-input" style="position: relative; width: 100%">
														@if($no+1 != 1)
														<button id="back_{{ $no+1 }}" class="contact1002-form-btn" type="button" onclick="backSurveyStocktaking(this.id)" style="display: inline-block;background-color: red !important">
															<span>
																Back
																<i class="fa fa-arrow-left"></i>
															</span>
														</button>
														@endif


														@if($no+1 != $stocktaking_survey_count)
														<button id="next_{{ $no+1 }}" class="contact100-form-btn" type="button" onclick="nextSurveyStocktaking(this.id)" style="display: inline-block;float: right">
															<span>
																Next
																<i class="fa fa-arrow-right"></i>
															</span>
														</button>
														@else
														<button class="contact100-form-btn" type="button" onclick="submitSurveyStoctaking()" style="display: inline-block;float: right;">
															<span>
																Submit
																<i class="fa fa-arrow-right"></i>
															</span>
														</button>
														@endif
													</div>

													@if($no+1 == 1)
													<div class="validate-input" style="width: 100%;">
														<span style="font-weight: bold;margin-top: 40px;">Page {{ $no+1 }} of {{ $stocktaking_survey_count }}</span>
													</div>
													@else
													<div class="validate-input" style="width: 100%;">
														<span style="font-weight: bold;margin-top: 20px;float: right;">Page {{ $no+1 }} of {{ $stocktaking_survey_count }}</span>
													</div>
													@endif
													@php $no++; @endphp
												</td>
											</tr>
											@endforeach

										</tbody>
									</table>
								</div>
							</div>
							<br>
							<div id="stocktaking_survey_finish" style="width: 100%">
								<div class="col-xs-12 col-md-12">
									<center style="font-size:16px">
										Terimakasih <span id="stocktaking_survey_name_finish"></span> telah mengisi survey stocktaking pada <span style="color: red"><div id="stocktaking_survey_time"></div></span>
									</center>
								</div>
							</div>

							<div class="container-contact100-form-btn" style="margin-top: 30px;">
								<button class="contact1002-form-btn" type="button" onclick="cancel('stocktaking_survey_form')" style="display: inline-block;">
									<span>
										<i class="fa fa-arrow-left"></i>
										Back To Home
									</span>
								</button>
							</div>
						</form>


					</div>
				</div>
			</div>

			<div class="modal fade" id="modal-maps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" style="margin-top: 200px">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" align="center"><b>Your Location</b></h4>
						</div>
						<div class="modal-body">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="iframe">

							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="modal-footer">
									<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="modal-pengumuman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" style="margin-top: 200px">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" align="center"><b>Pengumuman</b></h4>
						</div>
						<div class="modal-body">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="announcement">

							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="modal-footer">
									<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
								</div>
							</div>
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
		<script src="{{ url('js/main.js')}}"></script>
		<script src="{{ url('js/jquery.gritter.min.js') }}"></script>
		<!--<script src="{{ url('datatable/dataTables.buttons.min.js')}}"></script>-->
		<script src="{{ url('datatable/jquery.dataTables.min.js')}}"></script>
		<script src="{{ url('datatable/dataTables.bootstrap.min.js')}}"></script>
		<script>


			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			jQuery(document).ready(function() {
				// datatableQuestion();
				$('#username').val('');
				$('#password').val('');
				$('#password_reset').val('');
				$('#password_reset2').val('');

				$(document).on("wheel", "input[type=number]", function (e) {
					$(this).blur();
				});

				$(".select2").select2();
				// var path = 'http://10.109.52.4/mirai/public/files/pkb/pkb_'+'{{$periode}}'+'.pdf';
    //   			$('#attach_pdf').append("<embed src='"+ path +"' type='application/pdf' width='100%' height='800px'>");
    //   			console.log(parseInt('{{$pkb_question_total}}'));
    for(var i = 0; i < parseInt('{{$pkb_question_total}}');i++){
    	var name= 'pkb_answer_'+i;
    	$('#'+name).prop('checked', false);
    }

});

			function tab(index) {

				var tgl = "{{ $tgl }}";

				if (index === 1) {
					$('#form_anda').show();
					$('#form_menu').hide();
					$("#form_login").hide();
					$("#form_survey").hide();
					$("#form_belum_survey").hide();
					$("#keterangan_umum").show();
					$("#form_pkb").hide();
					$("#stocktaking_survey_form").hide();
				}

				if (index === 2) {
					$('#form_grup').show();
					$('#form_menu').hide();
					$("#form_login").hide();
					$("#form_survey").hide();
					$("#form_belum_survey").hide();
					$("#keterangan_umum").show();
					$("#form_pkb").hide();
					$("#stocktaking_survey_form").hide();
				}

				if (index === 3) {
					fillTablePengumuman();
					$('#form_pengumuman').show();
					$('#form_menu').hide();
					$("#form_login").hide();
					$("#form_survey").hide();
					$("#form_belum_survey").hide();
					$("#keterangan_umum").show();
					$("#form_pkb").hide();
					$("#stocktaking_survey_form").hide();
				}

				if (index === 4) {
					fillTableKehadiran();
					$('#form_kehadiran').show();
					$('#form_menu').hide();
					$("#form_login").hide();
					$("#form_survey").hide();
					$("#form_belum_survey").hide();
					$("#keterangan_umum").show();
					$("#form_pkb").hide();
					$("#stocktaking_survey_form").hide();
				}

				if (index === 5) {
					if (tgl >= "2022-02-01 12:00:00" && tgl <= "2022-02-01 18:00:00") {
						$('#form_kehadiran').hide();
						$('#form_menu').hide();
						$("#form_login").hide();
						$("#form_survey").show();
						$("#form_belum_survey").hide();
						$("#keterangan_umum").hide();
						$("#form_pkb").hide();
						$("#stocktaking_survey_form").hide();
						hideAll();
					}
					else{
						$('#form_kehadiran').hide();
						$('#form_menu').hide();
						$("#form_login").hide();
						$("#form_survey").hide();
						$("#form_belum_survey").show();
						$("#keterangan_umum").hide();
						$("#form_pkb").hide();
						$("#stocktaking_survey_form").hide();
						hideAll();
					}

					// $("#form_survey").hide();
					// $("#form_belum_survey").show();

				}

				if (index === 6) {
					$('#form_kehadiran').hide();
					$('#form_menu').hide();
					$("#form_login").hide();
					$("#form_survey").hide();
					$("#form_belum_survey").hide();
					$("#keterangan_umum").hide();
					$("#stocktaking_survey_form").hide();
					$("#form_pkb").show();
					$("#surat_pernyataan").hide();
					$('#div_pkb_question_0').show();
					$('#btn_pkb_submit_0').show();
				}

				if(index === 7){
					$('#form_kehadiran').hide();
					$('#form_menu').hide();
					$("#form_login").hide();
					$("#form_survey").hide();
					$("#form_belum_survey").hide();
					$("#keterangan_umum").hide();
					$("#form_pkb").hide();
					$("#stocktaking_survey_form").show();
					hideStocktakingSurvey();
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

			function login() {
				var data = {
					employee_id : $('#username').val(),
					password : $('#password').val(),
					periode: $('#periode').val()
				}
				$.get('{{url("check/employee_id")}}', data, function(result, status, xhr){
					if (result.status) {
						if (result.data.length > 0) {
							if (result.data[0].password == '123456') {
								$("#form_reset").show();
								$("#notification").hide();
								$("#form_login").hide();
								openSuccessGritter("Success","Login Berhasil. Silahkan Reset Password");
							}else{
								$("#form_menu").show();
								$("#form_anda").hide();
								$("#form_login").hide();
								$("#notification").hide();
								openSuccessGritter("Success","Login Berhasil");

								$('#nama').html(result.data[0].name);
								$('#nama_bawah').html(result.data[0].name);
								$('#nik').html(result.data[0].employee_id);
								$('#department_pkb').html(result.data[0].department);
								$('#grade').html(result.data[0].grade_code);
								$('#jabatan').html(result.data[0].position);

								// $("#div_detail_belum").show();
								// $("#div_detail_sudah").hide();
								// $("#div_detail").hide();
								if (result.cek_pkb != null) {
									$("#div_detail_belum").hide();
									$("#div_detail_sudah").show();
									$("#surat_pernyataan").hide();
									$('#tanggal_pkb').html(result.cek_pkb.created_at);
									$("#div_detail").hide();
									$("#div_pertanyaan").hide();
								}else{
									$("#div_detail_belum").hide();
									$("#div_detail_sudah").hide();
									$("#surat_pernyataan").show();
									$('#tanggal_pkb').html('');
									$("#div_detail").show();
									$("#div_pertanyaan").show();
								}
							}
							$("#employee_id").text(result.data[0].employee_id);
							$("#employee_id_reset").val(result.data[0].employee_id);
							$("#employee_id_grup").text(result.data[0].employee_id);
							$("#employee_id_survey").text(result.data[0].employee_id);
							$("#emp_name").val(result.data[0].name);
							$("#name").text(result.data[0].name);
							$("#name_grup").text(result.data[0].name);
							$(".name_survey").text(result.data[0].name);
							$("#department").val(result.data[0].department);
							$("#department_survey").val(result.data[0].department);
							// if (navigator.geolocation) {
							// 	navigator.geolocation.getCurrentPosition(showPosition);
							// } else {
						 //    // x.innerHTML = "Geolocation is not supported by this browser.";
							// }



							if (result.cek_survey.length > 0) {
								$('#belum_survey').hide();
								$('#sudah_survey').show();
								if (result.cek_survey[0].total <= 35) {
									$('#waktu_covid').html(result.cek_survey[0].created_at);
									$('#resiko_covid').html('Tetap Jaga Kesehatan dan Kebersihan Diri Lingkungan Sekitarmu ya!');
								}
								else if(result.cek_survey[0].total > 35 && result.cek_survey[0].total <= 80){
									$('#waktu_covid').html(result.cek_survey[0].created_at);
									$('#resiko_covid').html('Tetap Jaga Kesehatan dan Kebersihan Diri Lingkungan Sekitarmu ya!');
								}
								else if(result.cek_survey[0].total > 80){
									$('#waktu_covid').html(result.cek_survey[0].created_at);
									$('#resiko_covid').html('Tetap Jaga Kesehatan dan Kebersihan Diri Lingkungan Sekitarmu ya!');
								}
							}
							else{
								$('#belum_survey').show();
								$('#sudah_survey').hide();
							}




							//Stocktaking Survey
							var position = [
							'Operator Contract',
							'Operator',
							'Senior Operator',
							'Sub Leader',
							'Leader'
							];

							var section = [
							'Pianica Process Section',
							'Recorder Proces',
							'Body Parts Process Section',
							'Assembly CL . Tanpo . Case Process Section',
							'Assembly FL Process Section',
							'Assembly Sax Process Section',
							'NC Process Section',
							'Press and Sanding Process Section',
							'Body Buffing-Barrel Process Section',
							'Buffing Key Process Section',
							'SurfaceTreatment Section',
							'Handatsuke . Support Process Section',
							'Koshuha Solder Process Section',
							'Warehouse Section'
							];

							if(position.includes(result.cek_stocktaking_emp.position) && section.includes(result.cek_stocktaking_emp.section)){
								$('#btn-survey-stocktaking').show();
							}else{
								$('#btn-survey-stocktaking').hide();
							}


							//Pak Budhi
							if(result.cek_stocktaking_emp.employee_id == 'PI0109004'){
								$('#btn-survey-stocktaking').show();
							}

							// MIS
							if(result.cek_stocktaking_emp.department == 'Management Information System Department'){
								$('#btn-survey-stocktaking').show();
							}

							// PC
							if(result.cek_stocktaking_emp.department == 'Production Control Department'){
								$('#btn-survey-stocktaking').show();
							}






							$("#stocktaking_survey_employee_id").text(result.data[0].employee_id);
							$("#stocktaking_survey_name").text(result.data[0].name);
							$("#stocktaking_survey_name_finish").text(result.data[0].name);
							$("#stockaking_survey_department").val(result.data[0].department);

							if(result.cek_stocktaking_survey.length > 0){
								$('#stocktaking_survey_not_yet').hide();
								$('#stocktaking_survey_finish').show();
								$('#stocktaking_survey_time').html(result.cek_stocktaking_survey[0].created_at);

							}else{
								$('#stocktaking_survey_not_yet').show();
								$('#stocktaking_survey_finish').hide();
							}


						} else {
							$("#notif").show();
						}
					} else {
						$("#notif").show();
					}
				})
}

function showPosition(position) {
			// console.log("Latitude: " + position.coords.latitude +
		 //  "<br>Longitude: " + position.coords.longitude);
		 $("#latitude").val(position.coords.latitude);
		 $("#longitude").val(position.coords.longitude);
		  // x.innerHTML = ;
		}

		function reset() {
			var pass_reset = $('#password_reset').val();
			var pass_reset2 = $('#password_reset2').val();
			var employee_id = $('#employee_id_reset').val();

			var data = {
				password : pass_reset,
				password2 : pass_reset2,
				employee_id : employee_id
			}

			if (pass_reset == "" || pass_reset2 == "") {
				openErrorGritter('Error!', 'Password Baru Harus Diisi.');
			}else{
				$.post('{{ url("post/reset_password") }}', data, function(result, status, xhr){
					if (result.status) {
							// $("#form_login").show();
							// $("#form_reset").hide();
							openSuccessGritter("Success","Reset Password Berhasil. Silahkan Login Kembali");
							location.reload();
						} else {
							$("#notif_reset").show();
						}
					})
			}
		}

		function datatableQuestion() {
			var table = $('#tableQuestion').DataTable({
				'dom': 'Bfrtip',
				'responsive':true,
	          // 'lengthMenu': [
	          // [ 5, 10, 25, -1 ],
	          // [ '5 rows', '10 rows', '25 rows', 'Show all' ]
	          // ],
	          // 'buttons': {
	          //   buttons:[
	          //   {
	          //     extend: 'pageLength',
	          //     className: 'btn btn-default',
	          //   },
	          //   ]
	          // },
	          'paging': true,
	          'lengthChange': true,
	          'pageLength': 1,
	          'searching': false,
	          'ordering': true,
	          'order': [],
	          'info': false,
	          'autoWidth': true,
	          "sPaginationType": "full_numbers", //simple
	          "bJQueryUI": true,
	          "bAutoWidth": false,
	          "processing": true
	      });
		}

		function datatableStocktakingSurvey() {
			var table = $('#tableStocktakingSurvey').DataTable({
				'dom': 'Bfrtip',
				'responsive':true,
				'paging': true,
				'lengthChange': true,
				'pageLength': 1,
				'searching': false,
				'ordering': true,
				'order': [],
				'info': false,
				'autoWidth': true,
				"sPaginationType": "full_numbers",
				"bJQueryUI": true,
				"bAutoWidth": false,
				"processing": true
			});
		}

		function submitForm() {
			$("#loading").show();

			var jumlah_pertanyaan = $("#jml_pertanyaan").val();
			var pertanyaan = [];
			var jawaban = [];
			
			if($("#suhu").val() == "" ){
				$("#loading").hide();
				openErrorGritter('Error!', 'Suhu Harus Diisi.');
				$("html").scrollTop(0);
				return false;
			}

			for(var i = 0;i<jumlah_pertanyaan; i++){
				var question = '#pertanyaan'+i;
				pertanyaan.push($(question).text());

				var answer = 'jawaban'+i;

				if ($('input[id="'+answer+'"]:checked').val() == null) {
					$("#loading").hide();
					openErrorGritter('Error!', 'Semua Kolom Bertanda Bintang (<b>*</b>) Harus Diisi.');
					$("html").scrollTop(0);
					return false;
				}
				
				

				jawaban.push($('input[id="'+answer+'"]:checked').val());
				
			}

			pertanyaan.push($('#pertanyaan_suhu').text());
			jawaban.push($('#suhu').val());

			// if ($('#latitude').val() == "") {
			// 	$("#loading").hide();
			// 	openErrorGritter('Error!', 'Perbolehkan Sistem Mengakses Lokasi Anda');
			// 	$("html").scrollTop(0);
			// 	return false;
			// }

			// if ($('#longitude').val() == "") {
			// 	$("#loading").hide();
			// 	openErrorGritter('Error!', 'Perbolehkan Sistem Mengakses Lokasi Anda');
			// 	$("html").scrollTop(0);
			// 	return false;
			// }

			// console.log(pertanyaan);
			// console.log(jawaban);

			var data = {
				employee_id: $("#employee_id").text(),
				name: $("#name").text(),
				department: $("#department").val(),
				question: pertanyaan,
				answer: jawaban,
				jumlah_pertanyaan : jumlah_pertanyaan,
				latitude : $("#latitude").val(),
				longitude : $("#longitude").val(),
			};

			$.post('{{ url("post/form") }}', data, function(result, status, xhr){
				if(result.status == true){    
					$("#loading").hide();
					$("#form_anda").hide();
					$("#form_login").hide();
					$("#form_terimakasih").show();
					$("#form_terimakasih").html('<?php date_default_timezone_set('Asia/Jakarta'); ?><center style="font-size:16px">Terimakasih '+$("#name").text()+' telah mengisi laporan pada <br><u><i><span style="color:blue;font-weight:bold;"> <?= date('d F Y') ?> Pukul <?= date('H:i:s') ?></i></u><br>Tetap Jaga Kesehatan dan Sayangi Keluarga Anda.</center><br><br>');
					openSuccessGritter("Success","Berhasil Dibuat");
				}
				else {
					$("#loading").hide();
					openErrorGritter('Error!', result.datas);
				}
			});
		}


		function submitSurveyStoctaking() {
			$("#loading").show();

			var count_question = $("#stocktaking_survey_count").val();
			var survey_question = [];
			var survey_answer = [];

			for(var i = 0;i < count_question; i++){

				survey_question.push( $("#survey_question_"+i).text() );

				if ($('input[id="survey_answer_' + i + '"]:checked').val() == null) {
					$("#loading").hide();
					openErrorGritter('Error!', 'Survey Harus Diisi');
					return false;
				}

				survey_answer.push( $('input[id="survey_answer_' + i + '"]:checked').val() );
				
			}

			var data = {
				employee_id: $("#stocktaking_survey_employee_id").text(),
				name: $("#stocktaking_survey_name").text(),
				department: $("#stockaking_survey_department").val(),
				question: survey_question,
				answer: survey_answer,
				count_question : count_question
			};

			$.post('{{ url("input/survey_stocktaking") }}', data, function(result, status, xhr){
				if(result.status == true){    
					$("#loading").hide();
					$("#form_login").hide();
					$('#stocktaking_survey_not_yet').hide();
					$('#stocktaking_survey_finish').show();	
					$('#stocktaking_survey_time').html(result.now);
					
				}else {
					$("#loading").hide();
					openErrorGritter('Error!', result.message);
				}
			});

		}

		function submitSurvey() {
			$("#loading").show();

			var jumlah_pertanyaan_survey = $("#jml_pertanyaan_survey").val();
			var pertanyaan_survey = [];
			var jawaban_survey = [];

			// console.log($('input[id="jawabansurvey0"]:checked').val());
			// console.log(jumlah_pertanyaan_survey);

			for(var i = 0;i < jumlah_pertanyaan_survey; i++){

				pertanyaan_survey.push($("#pertanyaan_survey"+i).text());

				// console.log($("#pertanyaan_survey"+i).text());
				
				var answer_survey = 'jawabansurvey'+i;

				// console.log($('input[id="'+answer_survey+'"]:checked').val());

				if ($('input[id="'+answer_survey+'"]:checked').val() == null) {
					$("#loading").hide();
					openErrorGritter('Error!', 'Survey Harus Diisi');
					return false;
				}

				jawaban_survey.push($('input[id="'+answer_survey+'"]:checked').val());
				
			}

			// console.log(pertanyaan_survey);
			// console.log(jawaban_survey);

			var data = {
				employee_id: $("#employee_id_survey").text(),
				name: $("#name_survey").text(),
				department: $("#department_survey").val(),
				question: pertanyaan_survey,
				answer: jawaban_survey,
				jumlah_pertanyaan_survey : jumlah_pertanyaan_survey
			};



			$.post('{{ url("post/form_survey") }}', data, function(result, status, xhr){
				if(result.status == true){    
					$("#loading").hide();
					$("#form_login").hide();
					$('#belum_survey').hide();
					$('#sudah_survey').show();

					if (result.total_nilai != null) {
						$('#belum_survey').hide();
						$('#sudah_survey').show();
						if (result.total_nilai <= 35) {
							$('#waktu_covid').html(result.tanggal);
							$('#resiko_covid').html('Tetap Jaga Kesehatan dan Kebersihan Diri Lingkungan Sekitarmu ya!');
						}
						else if(result.total_nilai > 35 && result.total_nilai <= 80){
							$('#waktu_covid').html(result.tanggal);
							$('#resiko_covid').html('Tetap Jaga Kesehatan dan Kebersihan Diri Lingkungan Sekitarmu ya!');
						}
						else if(result.total_nilai > 80){
							$('#waktu_covid').html(result.tanggal);
							$('#resiko_covid').html('Tetap Jaga Kesehatan dan Kebersihan Diri Lingkungan Sekitarmu ya!');
						}
					}
				}
				else {
					$("#loading").hide();
					openErrorGritter('Error!', result.message);
				}
			});
		}

		function fillTable() {

			$('#geser').show();

			var data = {
				employee_id : $('#nik_grup').val(),
				kode : $('#kode_grup').val(),
			}

			$.get('{{ url("index/getGrup") }}', data, function(result, status, xhr){
				if(result.status){
					$('#tableResult').DataTable().clear();
					$('#tableResult').DataTable().destroy();
	        // $('#tableHeadResult').html("");
	        $('#tableBodyResult').html("");
	        // var tableHead = "";
	        var tableData = "";

	        // tableHead += '<tr>';
	        // tableHead += '<th>Nama</th>';
	        // tableHead += '<th>Tanggal</th>';
	        // tableHead += '<th>Status</th>';
	        // tableHead += '</tr>'

	        // $('#tableHeadResult').append(tableHead);

	        $.each(result.datas, function(key, value) {
	        	var d = new Date(value.tanggal);
	        	var day = d.getDate();
	        	var months = ["Januari", "Februari", "Maret", "Apr", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
	        	var month = months[d.getMonth()];
	        	var year = d.getFullYear();

	        	var nama = value.name;
	        	var nama_singkat = nama.split(' ').slice(0,2).join(' ');

	        	tableData += '<tr>';
	        	tableData += '<td>'+ value.employee_id +' - '+ nama_singkat +'</td>';
	        	tableData += '<td>'+ day +' '+month+' '+year +'</td>';

	        	if (value.remark == "OFF" || value.remark == "OFF " || value.remark == " OFF" || value.remark == "Shift_1_OFF" || value.remark == "Shift_2_OFF") {
	        		tableData += '<td>SBH</td>';	          	
	        	}

	        	else if (value.remark == "Shift_1" || value.remark == "Shift_1_Jumat") {
	        		tableData += '<td>Masuk (Shift 1)</td>';	          	
	        	}

	        	else if (value.remark == "Shift_2" || value.remark == "Shift_2_Jumat") {
	        		tableData += '<td>Masuk (Shift 2)</td>';	          	
	        	}

	        	else if (value.remark == "LIBUR") {
	        		tableData += '<td>Libur</td>';	          	
	        	}

	        	else if (value.remark == "WOC" || value.remark == "WOC ") {
	        		tableData += '<td>Masuk</td>';	          	
	        	}

	        	else if (value.remark == "SD") {
	        		tableData += '<td>Sakit Dengan Surat Dokter</td>';	          	
	        	}

	        	else{
	        		tableData += '<td>Masuk</td>';
	        	}

	        	tableData += '</tr>';
	        });

	        $('#tableBodyResult').append(tableData);


	       // $('#tableResult tfoot th').each( function () {
	       //   var title = $(this).text();
	       //   $(this).html( '<input style="text-align: center;" type="text" placeholder="Search '+title+'" size="20"/>' );
	       // } );

	       var table = $('#tableResult').DataTable({
	       	'dom': 'Bfrtip',
	       	'responsive':true,
	       	'lengthMenu': [
	       	[ 5, 10, 25, -1 ],
	       	[ '5 rows', '10 rows', '25 rows', 'Show all' ]
	       	],
	       	'buttons': {
	       		buttons:[
	       		{
	       			extend: 'pageLength',
	       			className: 'btn btn-default',
	       		},
	       		]
	       	},
	       	'paging': true,
	       	'lengthChange': true,
	       	'pageLength': 15,
	       	'searching': true,
	       	'ordering': true,
	       	'order': [],
	       	'info': true,
	       	'autoWidth': true,
	       	"sPaginationType": "full_numbers",
	       	"bJQueryUI": true,
	       	"bAutoWidth": false,
	       	"processing": true
	       });
	       // table.columns().every( function () {
    	   //     var that = this;

    	   //     $( 'input', this.footer() ).on( 'keyup change', function () {
    	   //       if ( that.search() !== this.value ) {
    	   //         that
    	   //         .search( this.value )
    	   //         .draw();
    	   //       }
    	   //     } );
    	   //   } );
    	   // $('#tableResult tfoot tr').appendTo('#tableResult thead');
    	}
    	else{
    		alert('Attempt to retrieve data failed');
    	}

    });

		}

		function savePkb() {
			$("#loading").show();

			var persetujuan = [];
			$("input[name='persetujuan']:checked").each(function (i) {
				persetujuan[i] = $(this).val();
			});

			var question = [];
			var answers = [];

			if (persetujuan.length == 0) {
				$("#loading").hide();
				openErrorGritter('Error!', 'Persetujuan Harus Diisi..');
				return false;
			}

			for(var i = 0; i < parseInt('{{$pkb_question_total}}');i++){
				var answer = '';
				$("input[name='pkb_answer_"+i+"']:checked").each(function (i) {
					answer = $(this).val();
				});
				answers.push(answer);
				question.push($('#pkb_question_'+i).html());
			}

			var data = {
				employee_id : $('#username').val(),
				persetujuan : persetujuan[0],
				periode:'{{$periode}}',
				question:question,
				answer:answers
			}

			$.post('{{ url("input/pkb") }}', data, function(result, status, xhr){
				if(result.status == true){    
					$("#loading").hide();
					openSuccessGritter("Success","Berhasil Menyetujui");
					$("#div_detail_sudah").show();
					$("#tanggal_pkb").html(result.datetime);
					$("#div_detail").hide();
					$("#surat_pernyataan").hide();
					$("#div_detail_belum").hide();
				}
				else {
					$("#loading").hide();
					openErrorGritter('Error!', result.datas);
				}
			})
		}

		function submitPkbQuestion(no) {
			// for(var i = 0; i < parseInt('{{$pkb_question_total}}');i++){
				var answer = '';
			// 	$("input[name='pkb_answer_"+i+"']:checked").each(function (i) {
			//             answer = $(this).val();
		 //        });
		 //        if (answer != $("#pkb_right_answer_"+i).val()) {
		 //        	openErrorGritter('Error!','Jawaban nomor '+(i+1)+' salah. Silahkan cek kembali.');
		 //        	return false;
		 //        }
  	// 		}
  	// 		$('#div_pertanyaan').hide();
  	// 		$("#surat_pernyataan").show();
  	// 		openSuccessGritter('Success!','Anda berhasil menyelesaikan pertanyaan PKB Periode '+'{{$periode}}'+'<br>Silahkan Sign SURAT PERNYATAAN berikut.');
  	$("input[name='pkb_answer_"+no+"']:checked").each(function (i) {
  		answer = $(this).val();
  	});
  	if (answer != $("#pkb_right_answer_"+no).val()) {
  		$('#pkb_announcement_'+no).html('Jawaban Anda Salah!<br>Silahkan baca pembahasan berikut.');
  		$('#pkb_announcement_'+no).css("color", "red");
  		$('#pkb_announcement_'+no).css("fontWeight", "bold");
  		$('#btn_pkb_back_'+no).show();
  		$('#div_pkb_discussion_'+no).show();
  		$('#btn_pkb_submit_'+no).hide();
  		$('#div_pkb_question_'+no).hide();
  	}else{
  		$('#pkb_announcement_'+no).html('Jawaban Anda Benar!');
  		$('#pkb_announcement_'+no).css("color", "green");
  		$('#pkb_announcement_'+no).css("fontWeight", "bold");
  		$('#div_pkb_discussion_'+no).show();
  		$('#btn_pkb_next_'+no).show();
  		$('#btn_pkb_submit_'+no).hide();
  		$('#div_pkb_question_'+no).hide();
  	}
  }

  function backPkbQuestion(no) {
  	$('#pkb_announcement_'+no).html('');
  	$('#pkb_announcement_'+no).css("color", "white");
  	$('#btn_pkb_back_'+no).hide();
  	$('#div_pkb_discussion_'+no).hide();
  	$('#btn_pkb_submit_'+no).show();
  	$('#div_pkb_question_'+no).show();
  }

  function nextPkbQuestion(no) {
  	$('#pkb_announcement_'+no).html('');
  	$('#pkb_announcement_'+no).css("color", "white");
  	$('#btn_pkb_back_'+no).hide();
  	$('#btn_pkb_next_'+no).hide();
  	$('#div_pkb_discussion_'+no).hide();
  	$('#btn_pkb_submit_'+no).hide();
  	$('#div_pkb_question_'+no).hide();

  	$('#btn_pkb_submit_'+(parseInt(no)+1)).show();
  	$('#div_pkb_question_'+(parseInt(no)+1)).show();

  	if ((parseInt(no)+1) == '{{$pkb_question_total}}') {
  		$('#div_pertanyaan').hide();
  		$('#btn_pkb_submit_all').show();
  		$('#surat_pernyataan').show();
  		openSuccessGritter('Success!','Anda berhasil menyelesaikan pertanyaan PKB Periode '+'{{$periode}}'+'<br>Silahkan Sign SURAT PERNYATAAN berikut.');
  	}
  }

  function fillTablePengumuman() {

  	$.get('{{ url("index/getPengumuman") }}', function(result, status, xhr){
  		if(result.status){
  			$('#tableResultPengumuman').DataTable().clear();
  			$('#tableResultPengumuman').DataTable().destroy();
  			$('#tableBodyResultPengumuman').html("");
  			var tableData = "";

  			$.each(result.datas, function(key, value) {
  				var d = new Date(value.tanggal);
  				var day = d.getDate();
  				var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
  				var month = months[d.getMonth()];
  				var year = d.getFullYear();				

  				tableData += '<tr>';
  				tableData += '<td>'+ day +' '+month+' '+year +'</td>';
  				tableData += '<td><img src="../admin/public/images/' + value.images + '" width="100%" onclick="showAnnouncement(\''+value.images+'\')"></td>';
  				tableData += '</tr>';
  			});

  			$('#tableBodyResultPengumuman').append(tableData);

  			var table = $('#tableResultPengumuman').DataTable({
  				'dom': 'Bfrtip',
  				'responsive':true,
  				'lengthMenu': [
  				[ 5, 10, 25, -1 ],
  				[ '5 rows', '10 rows', '25 rows', 'Show all' ]
  				],
  				'buttons': {
  					buttons:[
  					{
  						extend: 'pageLength',
  						className: 'btn btn-default',
  					},
  					]
  				},
  				'paging': true,
  				'lengthChange': true,
  				'pageLength': 5,
  				'searching': true,
  				'ordering': true,
  				'order': [],
  				'info': true,
  				'autoWidth': true,
  				"sPaginationType": "full_numbers",
  				"bJQueryUI": true,
  				"bAutoWidth": false,
  				"processing": true
  			});
  		}
  		else{
  			alert('Attempt to retrieve data failed');
  		}

  	});

  }

  function fillTableKehadiran() {
  	$("#loading2").show();

  	var data = {
  		employee_id:$('#username').val()
  	}

  	$.get('{{ url("index/getKehadiran") }}',data, function(result, status, xhr){
  		if(result.status){
  			$("#loading2").hide();
  			$('#tableResultKehadiran').DataTable().clear();
  			$('#tableResultKehadiran').DataTable().destroy();
  			$('#tableBodyResultKehadiran').html("");
  			var tableData = "";

  			$.each(result.datas, function(key, value) {
  				var d = new Date(value.answer_date);
  				var day = d.getDate();
  				var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
  				var month = months[d.getMonth()];
  				var year = d.getFullYear();

  				tableData += '<tr>';
  				tableData += '<td>'+ day +' '+month+' '+year +'</td>';
  				tableData += "<td>"+value.employee_id+"</td>";
  				tableData += "<td>"+value.name+"</td>";
  				if (value.time_in == null) {
  					tableData += "<td></td>";
  					tableData += '<td></td>';
  				}else{
  					tableData += "<td>"+value.time_in+"</td>";
  					tableData += '<td><button class="btn btn-warning btn-sm" onclick="mapsSelector(\''+value.lat_in+'\',\''+value.lng_in+'\')">Location</button></td>';
  				}
  				if (value.time_out == null) {
  					tableData += "<td></td>";
  					tableData += '<td></td>';
  				}else{
  					tableData += "<td>"+value.time_out+"</td>";
  					tableData += '<td><button class="btn btn-warning btn-sm" onclick="mapsSelector(\''+value.lat_out+'\',\''+value.lng_out+'\')">Location</button></td>';
  				}
  				tableData += "<td>"+value.remark+"</td>";
  				tableData += '</tr>';
  			});

  			$('#tableBodyResultKehadiran').append(tableData);

  			var table = $('#tableResultKehadiran').DataTable({
  				'dom': 'Bfrtip',
  				'responsive':true,
  				'lengthMenu': [
  				[ 5, 10, 25, -1 ],
  				[ '5 rows', '10 rows', '25 rows', 'Show all' ]
  				],
  				'buttons': {
  					buttons:[
  					{
  						extend: 'pageLength',
  						className: 'btn btn-default',
  					},
  					]
  				},
  				'paging': true,
  				'lengthChange': true,
  				'pageLength': 15,
  				'searching': true,
  				'ordering': true,
  				'order': [],
  				'info': true,
  				'autoWidth': true,
  				"sPaginationType": "full_numbers",
  				"bJQueryUI": true,
  				"bAutoWidth": false,
  				"processing": true
  			});
  		}
  		else{
  			$("#loading2").hide();
  			alert('Attempt to retrieve data failed');
  		}

  	});

  }

  function mapsSelector(lat,lng) {
  	$('#modal-maps').modal('show');
  	$('#iframe').html('');
  	$('#iframe').append('<iframe width="100%" height="640" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=' + lat + ',' + lng + '&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>');

  }

  function showAnnouncement(images) {
  	$('#modal-pengumuman').modal('show');
  	$('#announcement').html('');
  	$('#announcement').append("<img src='../admin/public/images/" + images + "' width='100%'>");

  }
  function cancel(jenis_form) {
  	var form = '#'+jenis_form;
  	$(form).hide();
  	$('#form_menu').show();
  	$("#keterangan_umum").show();
  }


  function hideAll() {
  	for (var i=2; i<= $('#jml_pertanyaan_survey').val();i++) {
  		$('#tab_'+i).hide();
  	}
  }

  function hideStocktakingSurvey() {
  	for (var i=2; i<= $('#stocktaking_survey_count').val();i++) {
  		$('#stocktaking_tab_'+i).hide();
  	}
  }


  function backSurvey(elem){
  	var back_id = elem.split("_");
  	var back_next = parseInt(back_id[1])-1;
  	$('#tab_'+back_id[1]).hide();
  	$('#tab_'+back_next).show();
  }

  function nextSurvey(elem){
  	var next_id = elem.split("_");
  	var next_back = parseInt(next_id[1])+1;
  	var next_array = parseInt(next_id[1])-1;

  	var answer_survey = 'jawabansurvey'+next_array;

  	if ($('input[id="'+answer_survey+'"]:checked').val() == null) {
  		$("#loading").hide();
  		openErrorGritter('Error!', 'Survey Harus Diisi');
  		return false;
  	}

  	$('#tab_'+next_id[1]).hide();
  	$('#tab_'+next_back).show();


  }

  function backSurveyStocktaking(elem){
  	var back_id = elem.split("_");
  	var back_next = parseInt(back_id[1])-1;
  	$('#stocktaking_tab_'+back_id[1]).hide();
  	$('#stocktaking_tab_'+back_next).show();
  }

  function nextSurveyStocktaking(elem){
  	var next_id = elem.split("_");
  	var next_back = parseInt(next_id[1])+1;
  	var next_array = parseInt(next_id[1])-1;

  	var answer_survey = 'survey_answer_'+next_array;

  	if ($('input[id="'+answer_survey+'"]:checked').val() == null) {
  		$("#loading").hide();
  		openErrorGritter('Error!', 'Survey Harus Diisi');
  		return false;
  	}

  	$('#stocktaking_tab_'+next_id[1]).hide();
  	$('#stocktaking_tab_'+next_back).show();


  }

</script>

</html>