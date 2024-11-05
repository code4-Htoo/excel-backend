<?php

namespace App\Http\Controllers;
use App\Imports\DataImport;
use App\Models\Data;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataImportController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new DataImport, $request->file('file'));
        return response()->json(['message' => 'Data Imported Successfully']);
    }
}