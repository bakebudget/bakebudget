<?php

namespace App\Http\Controllers;

use App\Models\fr;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.index');
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