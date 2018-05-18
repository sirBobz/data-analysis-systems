<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataset;

class DataProcessorController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show allData from database.
     * Data Cached
     *
     * @return \Illuminate\Http\Response
     */
    public function allData()
    {
        return view('Account.dashboard');
    }
    
}
