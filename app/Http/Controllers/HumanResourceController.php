<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HumanResourceController extends Controller
{
    public function indexCalonKaryawan(){
     $title = 'Employee Self Services';
     $title_jp = '従業員の情報サービス';

     return view('human_resource.calon_karyawan', array(
         'title' => $title,
         'title_jp' => $title_jp
     ));
    }
}
