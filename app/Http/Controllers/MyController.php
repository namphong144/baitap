<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    function index(Request $request){
        $kw = $request->get('q');
        if (empty($kw)){
            $contacts = DB::select("SELECT * FROM contacts");
        } else {
            $contacts = DB::select("SELECT * FROM contacts WHERE name LIKE '%$kw%' OR phone LIKE '%$kw%'");
        }

        //$contacts = DB::select("SELECT * FROM contacts");

        return view('index', ['contacts'=> $contacts]);
    }
}
