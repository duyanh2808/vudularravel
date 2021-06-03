<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Session;

class CRUDController extends Controller
{
    public function insertData(Request $input){
        DB::table('users')
    }
}
