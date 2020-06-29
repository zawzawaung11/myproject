<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Record;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show list record table
		 $list= Record::orderBy('created','asc')->paginate(10);
		 
	     return view('list.index',['data'=>$list]);
		
    }

  
}
