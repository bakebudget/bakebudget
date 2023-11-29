<?php

namespace App\Http\Controllers;

use App\Models\LogAplikasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LogController extends Controller
{
    //
    public function index()
    {
        $logs = [
            'logs' => LogAplikasi::all()
        ];

        return view("log.index", $logs);
    }
    function print()
    {
        $logs = [
            'logs' => LogAplikasi::all()
        ];

        $pdf = Pdf::loadView("log.index", compact( $logs));
        return $pdf->stream();
    }
}
