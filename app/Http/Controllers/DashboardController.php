<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
        'sum' => DB::select('SELECT * FROM sum_pengeluaran')[0],
        'user' => User::query()->count('username')
        ];
        return view('dashboard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fr $fr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fr $fr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fr $fr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fr $fr)
    {
        //
    }
}
