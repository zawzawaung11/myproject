<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    //
	protected $table = 'file_uploads';
	
	public $timestamps = false;
	
	protected $guarded = [];
}
