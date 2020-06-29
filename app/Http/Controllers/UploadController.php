<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ExcelImport;
use App\Models\Import;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		$list= Import::orderBy('id','desc')->get();
		
		return view('upload.index',['data'=>$list]);
    }
	
	public function import(Request $request) 
    {		
		$request->validate([
            'filename' => 'required|mimes:csv,txt',
        ]);
		
        Excel::import(new ExcelImport, request()->file('filename'));
						 
		return back()->with('success', 'Excel Imported Success!.');
 
    }

   
}
