<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demo;
class DemoController extends Controller
{
    public function getDemoList(Request $request)
    {
        $dataList = Demo::all();
        return response()->json($dataList);
    }
}
