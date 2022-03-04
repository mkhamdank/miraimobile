<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Response;
use App\User;
use App\QuizLog;
use Hash;
use App\Employee;
use App\Pkb;
use App\EmergencySurvey;
use App\SurveyLog;
use App\PedulilindungiSurvey;
use App\SummaryQuantity;
use App\GuestLog;
use App\VendorLog;
use App\CmsVendor;
use App\EsportRegister;
use App\VaksinSurvey;
use App\VaksinRegister;
use App\VaksinRegisterNew;
use App\PkbPeriode;
use App\PkbQuestion;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\KodeEtikQuestion;
use App\KodeEtikAnswer;

class MasterController extends Controller
{
	public function index(){

		$question = db::select("select distinct pertanyaan from health_surveys where remark = 'covid' and deleted_at is null");

		$st_question = db::connection('ympimis_2')
		->select("SELECT DISTINCT question, image FROM stocktaking_survey_questions
			WHERE remark = 'stoctaking_survey'
			AND deleted_at IS NULL");

		$periode = PkbPeriode::where('status','Active')->first();
		$pkb_question = PkbQuestion::where('periode',$periode->periode)->get();
		$kode_etik_question = KodeEtikQuestion::get();


		return view('home_mirai', array(
			'question' => $question,
			'st_question' => $st_question,
			'tgl' => date('Y-m-d H:i:s'),
			'periode' => $periode->periode,
			'pkb_question' => $pkb_question,
			'kode_etik_question' => $kode_etik_question
		));
	}

	public function corona(){
		return view('kuisioner_corona');
	}

	public function emergency1(){
		return view('kuisioner_emergency_1');
	}

	public function emergency2(){
		return view('kuisioner_emergency_2');
	}

	public function emergency3(){
		return view('kuisioner_emergency_3');
	}

	public function emergency4(){
		return view('kuisioner_emergency_4');
	}

	public function emergency5(){
		return view('kuisioner_emergency_5');
	}

	public function get_employee( Request $request)
	{
		try {

			$emp = DB::SELECT("SELECT
				employee_syncs.employee_id,
				employee_syncs.`name`,
				employee_syncs.department,
				employee_syncs.grade_code,
				employee_syncs.grade_name,
				employee_syncs.position,
				employee_syncs.birth_date,
				employees.`password` 
				FROM
				`employees`
				JOIN employee_syncs ON employees.employee_id = employee_syncs.employee_id 
				WHERE
				employee_syncs.`employee_id` = '".$request->get('employee_id')."' 
				AND employee_syncs.`end_date` IS NULL");

			if (count($emp) > 0) {
				$vaksin = VaksinSurvey::where('employee_id',$request->get('employee_id'))->first();
				$response = array(
					'status' => true,
					'message' => 'Success',
					'employee' => $emp,
					'vaksin' => $vaksin
				);
				return Response::json($response);
			}else{
				$response = array(
					'status' => false,
					'message' => 'Failed',
					'employee' => ''
				);
				return Response::json($response);
			}


		} 	
		catch (\Exception $e) {
			$response = array(
				'status' => false,
				'message' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	public function get_employee_sunfish( Request $request)
	{
		try {

			$emp = DB::SELECT("SELECT
				employee_id,
				name,
				department,
				section,
				birth_place,
				birth_date,
				address,
				phone,
				card_id
				FROM
				`employee_syncs` 
				WHERE
				`employee_id` = '".$request->get('employee_id')."'
				AND `end_date` IS NULL");

			if (count($emp) > 0) {
				$response = array(
					'status' => true,
					'message' => 'Success',
					'employee' => $emp
				);
				return Response::json($response);
			}else{
				$response = array(
					'status' => false,
					'message' => 'Failed',
					'employee' => ''
				);
				return Response::json($response);
			}


		} 	
		catch (\Exception $e) {
			$response = array(
				'status' => false,
				'message' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	public function inputEmergency(Request $request)
	{
		try {

			$cek_input = db::select("select * from emergency_surveys 
				where employee_id='".$request->get('employee_id')."' 
				and keterangan = '".$request->get('keterangan')."'");

			if (count($cek_input) > 0) {
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Form Survey Ini'
				);
				return Response::json($response);
			}

			else{
				$forms = EmergencySurvey::create([
					'tanggal' => date('Y-m-d'),
					'employee_id' => $request->get('employee_id'),
					'name' => $request->get('name'),
					'department' => $request->get('department'),
					'jawaban' => $request->get('jawaban'),
					'keterangan' => $request->get('keterangan'),
					'nama' => $request->get('nama'),
					'hubungan' => $request->get('hubungan'),
				]);

				$forms->save();

				$response = array(
					'status' => true,
					'datas' => 'Berhasil Input Data',
				);
				return Response::json($response);
			}


		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Laporan Untuk Hari ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}


	public function auth(Request $request){

		$user = $request->get('username');
		$pass = $request->get('password');

		$asd = Hash::check('dd', bcrypt($pass));

	        // if ($asd == true) {
	        // 	$asd = 'aw';
	        // }
	        // else{
	        // 	$asd = '412';
	        // }

	        // var_dump($asd);die();

		$login = User::where('username','=', $user)
		->first();

		if ($login == null) {
			return 'username atau password salah';

		} else{
			if ($login == true) {
				return view('kuisioner');
			}
			else{
				return 'password salah';
			}

		}

	}

	public function checkEmployeeId(Request $request)
	{
		try {
			$cek = db::select("SELECT
				employee_syncs.employee_id,
				employee_syncs.`name`,
				employee_syncs.department,
				employee_syncs.grade_code,
				employee_syncs.grade_name,
				employee_syncs.position,
				employee_syncs.birth_date,
				employees.`password` 
				FROM
				`employees`
				JOIN employee_syncs ON employees.employee_id = employee_syncs.employee_id 
				WHERE
				employees.`employee_id` = '".$request->get('employee_id')."' 
				AND employees.`password` = '".$request->get('password')."' 
				AND employee_syncs.`end_date` IS NULL");

			$cek_survey = DB::SELECT('SELECT DISTINCT employee_id,total,created_at from survey_logs where employee_id = "'.$request->get('employee_id').'"');

			$cek_pkb = Pkb::where('periode',$request->get('periode'))->where('employee_id',$request->get('employee_id'))->first();
			$cek_kode_etik = KodeEtikAnswer::where('employee_id',$request->get('employee_id'))->first();

	  //   	$url = "http://36.94.7.202:887/miraimobile/public/check/employee_id?employee_id=".$request->get('employee_id')."&password=".$request->get('password')."&format=json";
			// // $url = "https://www.google.com/maps/@".$lat.",".$long."";
			// $curlHandle = curl_init();
			// curl_setopt($curlHandle, CURLOPT_URL, $url);
			// curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			// curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			// curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			// curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			// curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
			// curl_setopt($curlHandle, CURLOPT_POST, 0);
			// $results = curl_exec($curlHandle);
			// curl_close($curlHandle);

			// var_dump(json_decode($results));
			// die();


			$cek_stocktaking_survey = db::connection('ympimis_2')
			->select("SELECT * FROM stocktaking_surveys
				WHERE employee_id = '".$request->get('employee_id'). "'");

			$cek_stocktaking_emp = db::connection('ympimis')
			->table('employee_syncs')
			->where('employee_id' , $request->get('employee_id') )
			->first();

			$response = array(
				'status' => true,
				'data' => $cek,
				'cek_survey' => $cek_survey,
				'cek_stocktaking_survey' => $cek_stocktaking_survey,
				'cek_stocktaking_emp' => $cek_stocktaking_emp,
				'cek_pkb' => $cek_pkb,
				'cek_kode_etik' => $cek_kode_etik
			);
			return Response::json($response);
		} catch (QueryException $e) {
			$response = array(
				'status' => false,
				'message' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	public function resetPassword(Request $request)
	{
		try {
			if ($request->get('password') != $request->get('password2')) {
				$response = array(
					'status' => false,
				);                
			}else{
				$employees = Employee::where('employees.employee_id', '=', $request->get('employee_id'))
				->first();
				$employee = db::table('employees')->where('employees.employee_id', '=', $request->get('employee_id'))->update([
					'password' => $request->get('password')
				]);

				if ($employees->email != null) {
					$suhu = "";
					$mail_to = $employees->email;
					$contactList = [];
					$contactList[0] = 'nasiqul.ibat@music.yamaha.com';
					$contactList[1] = 'rio.irvansyah@music.yamaha.com';
					Mail::to($mail_to)->bcc($contactList,'BCC')->send(new SendEmail($suhu, 'change_password'));
				}

				$response = array(
					'status' => true,
					'data' => $employee
				);
				return Response::json($response);
			}
		} catch (\Exception $e) {
			$response = array(
				'status' => false,
				'message' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	


	public function postForm(Request $request)
	{
		$ipaddress = '';
		try {
		  //  if (isset($_SERVER['HTTP_CLIENT_IP']))
		  //      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		  //  else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		  //      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		  //  else if(isset($_SERVER['HTTP_X_FORWARDED']))
		  //      $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		  //  else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
		  //      $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		  //  else if(isset($_SERVER['HTTP_FORWARDED']))
		  //      $ipaddress = $_SERVER['HTTP_FORWARDED'];
		  //  else if(isset($_SERVER['REMOTE_ADDR']))
		  //      $ipaddress = $_SERVER['REMOTE_ADDR'];
		  //  else
		  //      $ipaddress = 'UNKNOWN';
            // if (getenv('HTTP_CLIENT_IP'))
            //     $ipaddress = getenv('HTTP_CLIENT_IP');
            // else if(getenv('HTTP_X_FORWARDED_FOR'))
            //     $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            // else if(getenv('HTTP_X_FORWARDED'))
            //     $ipaddress = getenv('HTTP_X_FORWARDED');
            // else if(getenv('HTTP_FORWARDED_FOR'))
            //     $ipaddress = getenv('HTTP_FORWARDED_FOR');
            // else if(getenv('HTTP_FORWARDED'))
            //   $ipaddress = getenv('HTTP_FORWARDED');
            // else if(getenv('REMOTE_ADDR'))
            //     $ipaddress = getenv('REMOTE_ADDR');
            // else
            //     $ipaddress = 'IP tidak dikenali';

			$ipaddress = $request->ip();
		} 
		catch (QueryException $e) {
			$ipaddress = '';
		}
		try {

			$quiz = $request->get('question');
			$answer = $request->get('answer');

			$jumlah_pertanyaan = $request->get('jumlah_pertanyaan');

			$loc = $this->getLocation($request->get('latitude'), $request->get('longitude'));

			$loc1 = json_encode($loc);

			$loc2 = explode('\"',$loc1);

                // All Village
			$keyVillage = array_search('village', $loc2);
			$keyResidential = array_search('residential', $loc2);
			$keyHamlet = array_search('hamlet', $loc2);
			$keyNeighbourhood = array_search('neighbourhood', $loc2);

                // All City
			$keyStateDistrict = array_search('state_district', $loc2);
			$keyCity = array_search('city', $loc2);
			$keyCounty = array_search('county', $loc2);

                //All Province
			$keyState = array_search('state', $loc2);
			$keyPostcode = array_search('postcode', $loc2);
			$keyCountry = array_search('country', $loc2);

			if ($keyVillage && $loc2[$keyVillage+2] != ":") {
				$village = $loc2[$keyVillage+2];
			}else if($keyResidential && $loc2[$keyResidential+2] != ":") {
				$village = $loc2[$keyResidential+2];
			}else if($keyHamlet && $loc2[$keyHamlet+2] != ":") {
				$village = $loc2[$keyHamlet+2];
			}else if($keyNeighbourhood && $loc2[$keyNeighbourhood+2] != ":") {
				$village = $loc2[$keyNeighbourhood+2];
			}else{	
				$village = "";
			}

			if ($keyStateDistrict && $loc2[$keyStateDistrict + 2] != ":") {
				$city = $loc2[$keyStateDistrict + 2];
			}else if($keyCity && $loc2[$keyCity + 2] != ":") {
				$city = $loc2[$keyCity + 2];
			}else if($keyCounty && $loc2[$keyCounty+2] != ":") {
				$city = $loc2[$keyCounty+2];
			}else{	
				$city = "";
			}

			if($keyState && $loc2[$keyState + 2] != ":"){
				$province = $loc2[$keyState + 2];
			}else{
				$province = "";
			}

			for ($i=0; $i < $jumlah_pertanyaan+1; $i++) { 
				$forms = QuizLog::create([
					'question_code' => 'corona-2',
					'answer_date' => date('Y-m-d'),
					'employee_id' => $request->get('employee_id'),
					'name' => $request->get('name'),
					'department' => $request->get('department'),
					'question' => $quiz[$i],
					'answer' => $answer[$i],
					'latitude' => $request->get('latitude'),
					'longitude' => $request->get('longitude'),
					'ip_address' => $ipaddress,
                    //   'mac_address' => $mac_address,
					'village' => $village,
					'city' => $city,
					'province' => $province
				]);

				$forms->save();                  
			}

			$response = array(
				'status' => true,
				'datas' => 'Berhasil Input Data',
			);
			return Response::json($response);

		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Laporan Untuk Hari ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}

	public function getLocation($lat, $long){

		$url = "https://locationiq.org/v1/reverse.php?key=29e75d503929a1&lat=".$lat."&lon=".$long."&format=json";
		$curlHandle = curl_init();
		curl_setopt($curlHandle, CURLOPT_URL, $url);
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
		curl_setopt($curlHandle, CURLOPT_POST, 1);
		$results = curl_exec($curlHandle);
		curl_close($curlHandle);

		$response = array(
			'status' => true,
			'data' => $results,
		);
		return Response::json($response);
	}

	public function getGrup(Request $request){
		try {

			if(strlen($request->get('employee_id')) > 0){
				$emp = "AND employee_id = '".$request->get('employee_id')."'";
			}
			else{
				$emp = "";
			}

			if(strlen($request->get('kode')) > 0){
				$kode = "AND kode = '".$request->get('kode')."'";
			}
			else{
				$kode = "";
			}

			$list = db::select("SELECT
				employee_id,
				name,
				tanggal,
				remark
				FROM
				`groups` 
				where `groups`.employee_id is not null
				".$emp." ".$kode."
				AND tanggal >= DATE(NOW()) AND tanggal <= DATE(NOW() + INTERVAL 7 DAY)
				order by tanggal ASC
				");

			$response = array(
				'status' => true,
				'datas' => $list
			);
			return Response::json($response);
		} 

		catch (QueryException $e) {
			$response = array(
				'status' => false,
				'message' => $e->getMessage()
			);
			return Response::json($response);
		}


	}

	public function getPengumuman(Request $request){
		try {
			$list = db::select("SELECT
			    *
				FROM
				announcements
				where deleted_at is null
				ORDER BY id desc
				");

			$response = array(
				'status' => true,
				'datas' => $list
			);
			return Response::json($response);
		} 

		catch (QueryException $e) {
			$response = array(
				'status' => false,
				'message' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	public function getKehadiran(Request $request){
		try {
			$list = db::select("SELECT
				att.*,
				groups.remark 
				FROM
				(
				SELECT
				employee_id,
				`name`,
				answer_date,
				SUM( masuk ) lat_in,
				SUM( masuk1 ) lng_in,
				IF
				(
				SUM( id_out ) - SUM( id_in ) <> 7 
				AND SUM( jam_out ) - SUM( jam_in ) > 1,
				SUM( keluar ),
				NULL 
				) lat_out,
				IF
				(
				SUM( id_out ) - SUM( id_in ) <> 7 
				AND SUM( jam_out ) - SUM( jam_in ) > 1,
				SUM( keluar2 ),
				NULL 
				) lng_out,
				SEC_TO_TIME(
				SUM( time_in )) time_in,
				IF
				(
				SUM( id_out ) - SUM( id_in ) <> 7 
				AND SUM( jam_out ) - SUM( jam_in ) > 1,
				SEC_TO_TIME(
				SUM( time_out )),
				NULL 
				) time_out 
				FROM
				(
				SELECT
				employee_id,
				`name`,
				answer_date,
				latitude AS masuk,
				longitude AS masuk1,
				0 AS keluar,
				0 AS keluar2,
				id AS id_in,
				0 AS id_out,
				DATE_FORMAT( created_at, '%H' ) AS jam_in,
				0 AS jam_out,
				TIME_TO_SEC(
				DATE_FORMAT( created_at, '%H:%i:%s' )) AS time_in,
				0 AS time_out 
				FROM
				quiz_logs 
				WHERE
				id IN ( SELECT MIN( id ) FROM quiz_logs GROUP BY employee_id, `name`, answer_date ) UNION ALL
				SELECT
				employee_id,
				`name`,
				answer_date,
				0 AS masuk,
				0 AS masuk1,
				latitude AS keluar,
				longitude AS keluar2,
				0 AS id_in,
				id AS id_out,
				0 AS jam_in,
				DATE_FORMAT( created_at, '%H' ) AS jam_out,
				0 AS time_in,
				TIME_TO_SEC(
				DATE_FORMAT( created_at, '%H:%i:%s' )) AS time_out 
				FROM
				quiz_logs 
				WHERE
				id IN ( SELECT MAX( id ) FROM quiz_logs GROUP BY employee_id, `name`, answer_date ) 
				) AS semua 
				GROUP BY
				employee_id,
				`name`,
				answer_date
				) AS att
				LEFT JOIN groups ON att.employee_id = groups.employee_id 
				AND att.answer_date = groups.tanggal 
				WHERE
				att.employee_id = '".$request->get('employee_id')."'
				ORDER BY att.answer_date DESC");

			$response = array(
				'status' => true,
				'datas' => $list
			);
			return Response::json($response);
		} 

		catch (QueryException $e) {
			$response = array(
				'status' => false,
				'message' => $e->getMessage()
			);
			return Response::json($response);
		}
	}


	public function postFormSurvey(Request $request)
	{
		try {

			$quiz = $request->get('question');
			$answer = $request->get('answer');
			$jumlah_pertanyaan = $request->get('jumlah_pertanyaan_survey');

			$nilai = [];
			$total_nilai = 0;
			$keterangan = "";

			for ($i=0; $i < $jumlah_pertanyaan; $i++) { 
				$point = db::select("SELECT * FROM health_surveys where pertanyaan = '".$quiz[$i]."' and jawaban = '".$answer[$i]."' ");

				foreach ($point as $poin) {
					$ni = $poin->nilai;
					array_push($nilai,$ni);
					$total_nilai += $ni;
				}
			}

		        // var_dump($total_nilai);die();

			$forms = SurveyLog::create([
				'survey_code' => 'covid',
				'tanggal' => date('Y-m-d'),
				'employee_id' => $request->get('employee_id'),
				'name' => $request->get('name'),
				'department' => $request->get('department'),
				'question' => json_encode($quiz),
				'answer' => json_encode($answer),
				'poin' => json_encode($nilai),
				'total' => $total_nilai,
				'keterangan' => $keterangan
			]);

			$forms->save();                  

			$response = array(
				'status' => true,
				'datas' => 'Berhasil Input Data',
				'tanggal' => date('Y-m-d H:i:s'),
				'total_nilai' => $total_nilai
			);
			return Response::json($response);

		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Laporan Untuk Hari ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}

	public function guest_assessment(){
		return view('kuisioner_guest');
	}

	public function inputGuestAssessment(Request $request)
	{
		try {
			$tujuan_upload = 'files/gsa';

			$quiz = $request->input('question');
			$answer = $request->input('answer');
			$file_vaksin = $request->file('file_vaksin');
			$file_rapid = $request->file('file_rapid');
			$file_pcr = $request->file('file_pcr');

			if ($file_pcr != NULL) {
				$nama = $file_pcr->getClientOriginalName();
				$filename = pathinfo($nama, PATHINFO_FILENAME);
				$extension = pathinfo($nama, PATHINFO_EXTENSION);
				$filename = md5($filename.date('YmdHisa')).'.'.$extension;
				$file_pcr->move($tujuan_upload,$filename);
			}
			else if ($file_vaksin != NULL) {
				$nama = $file_vaksin->getClientOriginalName();
				$filename = pathinfo($nama, PATHINFO_FILENAME);
				$extension = pathinfo($nama, PATHINFO_EXTENSION);
				$filename = md5($filename.date('YmdHisa')).'.'.$extension;
				$file_vaksin->move($tujuan_upload,$filename);
			}
			else if ($file_rapid != NULL) {
				$nama = $file_rapid->getClientOriginalName();
				$filename = pathinfo($nama, PATHINFO_FILENAME);
				$extension = pathinfo($nama, PATHINFO_EXTENSION);
				$filename = md5($filename.date('YmdHisa')).'.'.$extension;
				$file_rapid->move($tujuan_upload,$filename);
			}
			else{
				$filename = NULL;
			}

			$forms = GuestLog::create([
				'tanggal' => date('Y-m-d'),
				'name' => $request->input('name'),
				'company' => $request->input('company'),
				'phone' => $request->input('phone'),
				'date_from' => $request->input('date_from'),
				'date_to' => $request->input('date_to'),
				'reason' => $request->input('reason'),
				'pic' => $request->input('pic'),
				'location' => $request->input('location'),
				'question' => $quiz,
				'answer' => $answer,
				'file' => $filename
			]);

			$forms->save();    

			$isimail = "select * from guest_logs where id = ".$forms->id;
			$mail = db::select($isimail);

			Mail::to(['widura@music.yamaha.com'])->cc('prawoto@music.yamaha.com')->bcc(['rio.irvansyah@music.yamaha.com','mokhamad.khamdan.khabibi@music.yamaha.com'])->send(new SendEmail($mail, 'guest'));

            // Mail::to(['rio.irvansyah@music.yamaha.com'])->bcc(['mokhamad.khamdan.khabibi@music.yamaha.com'])->send(new SendEmail($mail, 'guest'));

			$response = array(
				'status' => true,
				'datas' => 'Berhasil Input Data'
			);
			return Response::json($response);

		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}

	public function wpos(){
		return view('kuisioner_wpos');
	}

	public function vendor_assessment(){
		return view('kuisioner_vendor');
	}

	public function inputVendorAssessment(Request $request)
	{
		try {
			$tujuan_upload = 'files/vendor';

			$file_vaksin = $request->file('file_vaksin');
			$file_rapid = $request->file('file_rapid');

			if ($file_rapid != NULL) {
				$nama = $file_rapid->getClientOriginalName();
				$filename = pathinfo($nama, PATHINFO_FILENAME);
				$extension = pathinfo($nama, PATHINFO_EXTENSION);
				$filename = md5($filename.date('YmdHisa')).'.'.$extension;
				$file_rapid->move($tujuan_upload,$filename);
			}
			else{
				$filename = NULL;
			}

			$forms = VendorLog::create([
				'tanggal' => date('Y-m-d'),
				'name' => $request->input('name'),
				'company' => $request->input('company'),
				'result' => $request->input('status'),
				'file' => $filename
			]);

			$forms->save();                  

			$isimail = "select * from vendor_logs where id = ".$forms->id;
			$mail = db::select($isimail);

            // Mail::to(['mokhamad.khamdan.khabibi@music.yamaha.com'])->bcc(['rio.irvansyah@music.yamaha.com'])->send(new SendEmail($mail, 'vendor'));

			Mail::to(['dicky.kurniawan@music.yamaha.com'])->cc('prawoto@music.yamaha.com')->bcc(['rio.irvansyah@music.yamaha.com','mokhamad.khamdan.khabibi@music.yamaha.com'])->send(new SendEmail($mail, 'vendor'));

			$response = array(
				'status' => true,
				'datas' => 'Berhasil Input Data'
			);
			return Response::json($response);

		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}

	public function reloadCaptcha()
	{
		return response()->json(['captcha'=> captcha_img()]);
	}

	public function indexVaksin()
	{
		return view('vaksin');
	}

	public function inputVaksin(Request $request)
	{
		try {

			$cek_input = db::select("select * from vaksin_surveys 
				where employee_id='".$request->get('employee_id')."' ");

        	// if (count($cek_input) > 0) {
        	// 	$response = array(
         //           'status' => false,
         //           'datas' => 'Anda Sudah Mengisi Form Survey Ini'
         //     	);
         //     	return Response::json($response);
        	// }

        	// else{
			$forms = VaksinSurvey::updateOrCreate(
				[
					'employee_id' => $request->get('employee_id')
				],
				[
					'tanggal' => date('Y-m-d'),
					'employee_id' => $request->get('employee_id'),
					'name' => $request->get('name'),
					'department' => $request->get('department'),
					'vaksin_1' => $request->get('vaksin_1'),
					'vaksin_2' => $request->get('vaksin_2'),
					'vaksin_3' => $request->get('vaksin_3'),
					'call_vaksin_3' => $request->get('call_vaksin_3'),
					'jenis_vaksin' => $request->get('jenis_vaksin'),
					'jenis_vaksin_3' => $request->get('jenis_vaksin_3'),
					'created_by' => 1,
				]
			);
	            // $forms = VaksinSurvey::create([

	            //   ]);

			$forms->save();

			$response = array(
				'status' => true,
				'datas' => 'Berhasil Input Data',
			);
			return Response::json($response);
        	// }


		} catch (QueryException $e){
             // $error_code = $e->errorInfo[1];
            	// if($error_code == 1062){
             //  		$response = array(
	            //        'status' => false,
	            //        'datas' => 'Anda Sudah Mengisi Laporan Untuk Hari ini'
	            //  	);
	            //  	return Response::json($response);
            	// }
            	// else{
			$response = array(
				'status' => false,
				'datas' => $e->getMessage()
			);
			return Response::json($response);
            	// }
		}
	}

	public function indexVaksinRegistration()
	{
		return view('vaksin_registration');
	}

	public function inputVaksinRegistration(Request $request)
	{
		try {
			$cek_input = db::select("select * from vaksin_registers where employee_id='".$request->get('employee_id')."' ");

			if (count($cek_input) > 0) {
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Form Survey Ini'
				);
				return Response::json($response);
			}

			else{

				$answer = $request->get('answer');

				$nilai = [];
				$total_nilai = 0;
				$keterangan = "";

				for ($i=0; $i < count($answer); $i++) { 

					$ni = 0;

					if ($i == 0 && $answer[0] != null) {
						$ni = 10;
					}else if($i == 1 && $answer[1] != null){
						$ni = 50;
					}else if($i == 2 && $answer[2] != null){
						$ni = 20;
					}else if($i == 3 && $answer[3] != null){
						$ni = 30;
					}
					array_push($nilai,$ni);
					$total_nilai += $ni;
				}

				$forms = VaksinRegister::create([
					'tanggal' => date('Y-m-d'),
					'employee_id' => $request->get('employee_id'),
					'name' => $request->get('name'),
					'department' => $request->get('department'),
					'birth_date' => $request->get('birth_date'),
					'answer' => json_encode($answer),
					'poin' => json_encode($nilai),
					'total' => $total_nilai,
					'created_by' => 1,
				]);

				$forms->save();

				$response = array(
					'status' => true,
					'datas' => 'Berhasil Input Data',
				);
				return Response::json($response);
			}


		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Laporan Untuk Hari ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}


	public function indexNewVaksinRegistration()
	{
		$qty = SummaryQuantity::where('type','vaksin_register')->first();
		return view('vaksin_new_registration')->with('qty',$qty);
	}

	public function inputNewVaksinRegistration(Request $request)
	{
		try {
			$cek_input = db::select("SELECT
					* 
				FROM
					`vaksin_register_news` 
				WHERE
					employee_id = '".$request->get('employee_id')."' 
					AND remark = 'vaksin_1_2' 
					OR employee_id = '".$request->get('employee_id')."' 
					AND remark = 'vaksin_3'");

			if (count($cek_input) >= 2) {
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Pernah Mendaftar'
				);
				return Response::json($response);
			}

			else{

				$summary = SummaryQuantity::where('type','vaksin_register')->first();

        		// if ($summary->quantity <= 3000) {
				if (count($request->get('keluarga_hubungan')) > 0) {
					$keluarga_hubungan = join('][',$request->get('keluarga_hubungan'));
					$keluarga_name = join('][',$request->get('keluarga_name'));
					$keluarga_ktp = join('][',$request->get('keluarga_ktp'));
					$keluarga_birth_place = join('][',$request->get('keluarga_birth_place'));
					$keluarga_birth_date = join('][',$request->get('keluarga_birth_date'));
					$keluarga_address = join('][',$request->get('keluarga_address'));
					$keluarga_phone = join('][',$request->get('keluarga_phone'));	
				}else{
					$keluarga_hubungan = null;
					$keluarga_name = null;
					$keluarga_ktp = null;
					$keluarga_birth_place = null;
					$keluarga_birth_date = null;
					$keluarga_address = null;
					$keluarga_phone = null;
				}



				$forms = VaksinRegisterNew::create([
					'tanggal' => date('Y-m-d'),
					'employee_id' => $request->get('employee_id'),
					'name' => $request->get('name'),
					'department' => $request->get('department'),
					'birth_place' => $request->get('birth_place'),
					'birth_date' => $request->get('birth_date'),
					'card_id' => $request->get('ktp'),
					'address' => $request->get('address'),
					'no_hp' => $request->get('no_hp'),
					'jumlah_keluarga' => $request->get('jumlah_keluarga'),
					'keluarga_hubungan' => $keluarga_hubungan,
					'keluarga_name' => $keluarga_name,
					'keluarga_ktp' => $keluarga_ktp,
					'keluarga_birth_place' => $keluarga_birth_place,
					'keluarga_birth_date' => $keluarga_birth_date,
					'keluarga_address' => $keluarga_address,
					'keluarga_no_hp' => $keluarga_phone,
					'remark' => 'vaksin_3',
					'created_by' => 1,
				]);

				$forms->save();


				$summary->quantity = $summary->quantity + (1+count($request->get('keluarga_hubungan')));
				$summary->save();

				$response = array(
					'status' => true,
					'datas' => 'Berhasil Input Data',
				);
				return Response::json($response);
        		// }else{
        		// 	$response = array(
	         //           'status' => false,
	         //           'datas' => 'Maaf, Kuota Sudah Penuh.'
	         //     	);
	         //     	return Response::json($response);
        		// }



			}


		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Laporan Untuk Hari ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}

	public function indexVaksinQR()
	{
		return view('vaksin_qr');
	}

	public function indexPeduliLindungi()
	{
		return view('pedulilindungi');
	}

	public function inputPeduliLindungi(Request $request)
	{
		try {

			$forms = PedulilindungiSurvey::updateOrCreate(
				[
					'employee_id' => $request->get('employee_id')
				],
				[
					'tanggal' => date('Y-m-d'),
					'employee_id' => $request->get('employee_id'),
					'name' => $request->get('name'),
					'department' => $request->get('department'),
					'result_survey' => $request->get('results'),
					'created_by' => 1,
				]
			);

			$forms->save();

			$response = array(
				'status' => true,
				'datas' => 'Berhasil Input Data',
			);
			return Response::json($response);

		} catch (QueryException $e){
			$response = array(
				'status' => false,
				'datas' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	public function indexEsport()
	{
		return view('esport_register');
	}

	public function inputEsport(Request $request)
	{
		try {
			$category = $request->get('category');
			$team_name = $request->get('team_name');
			$player = $request->get('player');
			$players = DB::SELECT("SELECT DISTINCT
				( phone_no ) 
				FROM
				esport_registers 
				WHERE
				category = '".$request->get('category')."'");

			if (count($players) < 16) {
				$false_player = 0;
				for ($j=0; $j < count($request->get('player')); $j++) { 
					$check = DB::SELECT("SELECT *
						FROM
						esport_registers 
						WHERE
						category = '".$request->get('category')."'
						AND
						`employee_id` = '".$player[$j]['employee_id']."'");
					if (count($check) > 0) {
						$false_player++;
					}
				}
				if ($false_player == 0) {
					for ($i=0; $i < count($request->get('player')); $i++) { 
						$emp = DB::SELECT("SELECT
							employee_id,
							name,
							department,
							section
							FROM
							`employee_syncs` 
							WHERE
							`employee_id` = '".$player[$i]['employee_id']."'
							AND `end_date` IS NULL");
						$forms = EsportRegister::create(
							[
								'category' => $request->get('category'),
								'team_name' => $request->get('team_name'),
								'phone_no' => $request->get('phone_no'),
								'no_urut' => count($players)+1,
								'player_index' => $i+1,
								'employee_id' => $player[$i]['employee_id'],
								'name' => $emp[0]->name,
								'department' => $emp[0]->department,
								'section' => $emp[0]->section,
								'created_by' => 1,
							]
						);

						$forms->save();
					}

					$response = array(
						'status' => true,
						'datas' => 'Berhasil Input Data',
						'no_urut' => count($players)+1,
						'cabang' => $request->get('category')
					);
					return Response::json($response);
				}else{
					$response = array(
						'status' => false,
						'datas' => 'Mohon Maaf. Ada peserta yang sudah mengikuti cabang '.$request->get('category')
					);
					return Response::json($response);
				}
			}else{
				$response = array(
					'status' => false,
					'datas' => 'Mohon Maaf. Kuota pendaftaran '.$request->get('category').' sudah penuh.'
				);
				return Response::json($response);
			}
		} catch (\Exception $e) {
			$response = array(
				'status' => false,
				'datas' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	public function indexEsportQuiz($id)
	{
		return view('esport_quiz');
	}

	public function indexPkb($periode)
	{
		return view('index_pkb')->with('periode',$periode);
	}

	public function inputPkb(Request $request)
	{
		try {
			$periode = $request->get('periode');
			$employee_id = $request->get('employee_id');
			$persetujuan = $request->get('persetujuan');
			$question = $request->get('question');
			$answer = $request->get('answer');

			$pkbcheck = Pkb::where('periode',$periode)->where('employee_id',$employee_id)->first();

			if (count($pkbcheck) > 0) {
				$response = array(
					'status' => false,
					'datas' => 'Anda sudah pernah menyetujui PKB Periode'.$periode
				);
				return Response::json($response);	
			}else{
				$pkb = Pkb::create([
					'periode' => $periode,
					'employee_id' => $employee_id,
					'agreement' => $persetujuan,
					'question' => join('_',$question),
					'answer' => join('_',$answer),
					'created_by' => 1,
				]);
				$pkb->save();
				$response = array(
					'status' => true,
					'datas' => 'Berhasil Menyetujui',
					'datetime' => date('Y-m-d H:i:s')
				);
				return Response::json($response);
			}
		} catch (\Exception $e) {
			$response = array(
				'status' => false,
				'datas' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

	public function indexCms(){
		return view('cms_vendor');
	}

	public function inputCms(Request $request)
	{
		try {
			$tujuan_upload = 'files/cms';
			
			$file_cms = $request->file('file_cms');

			if ($file_cms != NULL) {
				$nama = $file_cms->getClientOriginalName();
				$filename = pathinfo($nama, PATHINFO_FILENAME);
				$extension = pathinfo($nama, PATHINFO_EXTENSION);
				$filename = md5($filename.date('YmdHisa')).'.'.$extension;
				$file_cms->move($tujuan_upload,$filename);
			}
			else{
				$filename = NULL;
			}

			$forms = CmsVendor::create([
				'tanggal' => date('Y-m-d'),
				'name' => $request->input('name'),
				'company' => $request->input('company'),
				'question' => $request->input('question'),
				'answer' => $request->input('answer'),
				'file' => $filename
			]);

			$forms->save();    

			$response = array(
				'status' => true,
				'datas' => 'Berhasil Input Data'
			);
			return Response::json($response);

		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'datas' => 'Anda Sudah Mengisi Ini'
				);
				return Response::json($response);
			}
			else{
				$response = array(
					'status' => false,
					'datas' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}

	public function inputKodeEtik(Request $request)
	{
		try {
			
			$employee_id = $request->get('employee_id');
			$question = $request->get('question');
			$answer = $request->get('answer');

			$kodeEtikcheck = KodeEtikAnswer::where('employee_id',$employee_id)->first();

			if (count($kodeEtikcheck) > 0) {
				$response = array(
					'status' => false,
					'datas' => 'Anda sudah pernah Melakukan Post Test Kode Etik Kepatuhan'
				);
				return Response::json($response);	
			}else{
				$kode_etik = KodeEtikAnswer::create([
					'employee_id' => $employee_id,
					'question' => join('_',$question),
					'answer' => join('_',$answer),
					'created_by' => 1,
				]);
				$kode_etik->save();
				$response = array(
					'status' => true,
					'datas' => 'Berhasil Disimpan',
					'datetime' => date('Y-m-d H:i:s')

				);
				return Response::json($response);
			}
		} catch (\Exception $e) {
			$response = array(
				'status' => false,
				'datas' => $e->getMessage()
			);
			return Response::json($response);
		}
	}

}
