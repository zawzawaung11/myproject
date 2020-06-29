<?php

namespace App\Imports;

use App\Models\Import;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Excel|null
     */
    public function model(array $row)
    {
        return new Import([
           'name'     => $row[0],
		   'email'     => $row[1],
           
        ]);
    }
}
