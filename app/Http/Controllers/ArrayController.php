<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ArrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		echo '<a href="/"><p align="center">Back</p></a>';	

		for ($i = 1; $i < 11; $i++) {

        $result = DB::table('orders')
					->join('order_details','order_details.order_id', '=','orders.id')
					->join('portions', 'portions.item_id', '=', 'order_details.item_id')
					->join('portion_details', 'portion_details.portion_id', '=', 'portions.id')
					->join('parts', 'parts.id', '=', 'portion_details.part_id')
					->distinct('parts.name')
					->select('parts.name','portion_details.value','order_details.quantity')
					->where('orders.id', '=', $i)
					->orderby('parts.name')
					->get();
					
		echo "<p align='center'>Order".$i."</p>";			

		echo '<table style="border:1px solid #CCC" width="20%" align="center">';

		foreach($result as $r)
		{
		echo '<tr><td style="border:1px solid #CCC">'.$r->name.'';
	
		echo '<td style="border:1px solid #CCC">'.$r->value * $r->quantity.'</td></tr>';	
		}	
		
		echo '</table><br/>';

			}


    }

    
}
