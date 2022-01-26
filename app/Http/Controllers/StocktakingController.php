<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Response;
use Hash;


class StocktakingController extends Controller {

	public function inputSurvey(Request $request) {
		try {

			$now = date('Y-m-d H:i:s');
			$calendar = db::connection('ympimis')
			->table('stocktaking_calendars')
			->where('status', 'planned')
			->first();

			$master_question = db::connection('ympimis_2')
			->select("SELECT * FROM stocktaking_survey_questions
				WHERE remark = 'stoctaking_survey'
				AND deleted_at IS NULL");

			$count_question = $request->get('count_question');
			$question = $request->get('question');
			$answer = $request->get('answer');

			$poin = [];
			$score = 0;
			$remark = "";

			for ($i=0; $i < $count_question; $i++) { 
				for ($j=0; $j < count($master_question); $j++) { 
					if( ($question[$i] == $master_question[$j]->question) && ($answer[$i] == $master_question[$j]->answer) ){
						array_push( $poin, $master_question[$j]->score );
						$score += $master_question[$j]->score;
					}
				}
			}

			if($score <= 25){
				$remark = "TIDAK MENGERTI";
			}

			if($score > 25 && $score <= 50){
				$remark = "KURANG";
			}

			if($score > 50 && $score <= 75){
				$remark = "CUKUP";
			}

			if($score > 75){
				$remark = "MENGERTI";
			}

			$insert = db::connection('ympimis_2')
			->table('stocktaking_surveys')
			->insert([
				'survey_code' => 'stoctaking_survey',
				'date' => $calendar->date,
				'employee_id' => $request->get('employee_id'),
				'name' => $request->get('name'),
				'department' => $request->get('department'),
				'question' => json_encode($question),
				'answer' => json_encode($answer),
				'poin' => json_encode($poin),
				'score' => $score,
				'remark' => $remark,
				'created_at' => $now,
				'updated_at' => $now
			]);           

			$response = array(
				'status' => true,
				'message' => 'Data Survey Berhasil Disimpan',
				'now' => $now
			);
			return Response::json($response);

		} catch (QueryException $e){
			$error_code = $e->errorInfo[1];
			if($error_code == 1062){
				$response = array(
					'status' => false,
					'message' => 'Anda Sudah Mengisi Survey Stocktaking Untuk Bulan ini'
				);
				return Response::json($response);
			}else{
				$response = array(
					'status' => false,
					'message' => $e->getMessage()
				);
				return Response::json($response);
			}
		}
	}


}
