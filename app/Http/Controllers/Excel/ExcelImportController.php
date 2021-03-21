<?php

namespace App\Http\Controllers\Excel;


use App\Imports\CitiesImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportController extends Controller
{
    public function import()
    {
        Excel::import(new CitiesImport, 'iller.xlsx');
    }
}
