<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaksinSurvey extends Model
{
    protected $fillable = [
		'tanggal', 'employee_id', 'name', 'department', 'vaksin_1','vaksin_2', 'jenis_vaksin', 'created_by'
	];
}
