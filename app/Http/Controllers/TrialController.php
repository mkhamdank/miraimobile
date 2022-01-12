<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Response;use DataTables;

class TrialController extends Controller {

	public function checkConnection() {
		$database = '10.109.52.2';

		$data = exec("ping -n 1 $database", $output, $status);

		$conn = $output[2];

		if(str_contains($conn, "Request timed out")){
			dd($conn);
		}

		$response = array(
			'status' => true,
			'conn' => $conn,
		);
		return Response::json($response);
	}



}
