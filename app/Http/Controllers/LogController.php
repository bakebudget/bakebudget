<?php

namespace App\Http\Controllers;

use App\Models\LogAplikasi;
use Illuminate\Http\Request;

class LogController extends Controller
{
    //
    public function index(){
        $logs = LogAplikasi::all();

        return view("log.index");
    }
}
