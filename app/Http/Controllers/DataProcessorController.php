<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataset;
use Cache, Exception, Log;


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
     * Graphical representation of data
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	try 
    	{
            $allData = Dataset::all();
    		
    	    return view('Account.DataAnalysis.tabular_records', compact('allData'));

    	} 
    	catch (Exception $e) 
    	{
    		Log::error($e);
    	}
     
    }


    

    /**
     * Show allData from database 
     * in tabular manner.
     *
     * @return \Illuminate\Http\Response
     */
    public function allData()
    {
    	try 
    	{
            $allData = Cache::remember('allData', 3, function()
             {
                 return Dataset::all();
             });

    	    return view('Account.DataAnalysis.tabular_records', compact('allData'));

    	} 
    	catch (Exception $e) 
    	{
    	    Log::error($e);	
    	}
     
    }
    
}
