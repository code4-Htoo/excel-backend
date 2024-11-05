<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\Record;
use Illuminate\Support\Facades\Log;

class RecordController extends Controller
{
    public function import(Request $request)
    {
        // Validate the file
        $request->validate([
            'file' => 'required|file|mimes:xlsx,csv'
        ]);

        $chunkSize = 1000;

        //$records = (new FastExcel)->import($request->file('file'), function ($row) {
        //    return Record::create([
        //        'sale_start' => $row['Sale Start'],
        //        'dsp' => $row['DSP'],
        //        'sale_store' => $row['Sale Store'],
        //        'sale_type' => $row['Sale Type'],
        //        'sale_user_type' => $row['Sale User Type'],
        //        'territory' => $row['Territory'],
        //        'product_upc' => $row['Product UPC'],
        //        'product_reference' => $row['Product Reference'],
        //        'product_catalog_number' => $row['Product Catalog Number'],
        //        'product_label' => $row['Product Label'],
        //        'product_artist' => $row['Product Artist'],
        //        'asset_artist' => $row['Asset Artist'],
        //        'asset_title' => $row['Asset Title'],
        //        'asset_duration' => $row['Asset Duration'],
        //        'asset_isrc' => $row['Asset ISRC'],
        //    ]);
        //});

        $path = $request->file('file')->store('excel-files');
         (new FastExcel)->import(storage_path('app/' . $path), function ($row) {
            try {
                return Record::create([
                    'sale_start' => $row['Sale Start date'],
                    'sale_end' => $row['Sale End date'],
                    'dsp' => $row['DSP'],
                    'sale_store' => $row['Sale Store Name'],
                    'sale_type' => $row['Sale Type'],
                    'sale_user_type' => $row['Sale User Type'],
                    'territory' => $row['Territory'],
                    'product_upc' => $row['Product UPC'],
                    'product_reference' => $row['Product Reference'],
                    'product_catalog_number' => $row['Product Catalog Number'],
                    'product_label' => $row['Product Label'],
                    'product_artist' => $row['Product Artist'],
                    'product_title' => $row['Product Title'],
                    'asset_artist' => $row['Asset Artist'],
                    'asset_title' => $row['Asset Title'],
                     'asset_version' => $row['Asset Version'],
                    'asset_duration' => $row['Asset Duration'],
                    'asset_isrc' => $row['Asset ISRC'],
                    'asset_quantity' => $row['Asset Quantity']
                ]);
            } catch (\Exception $e) {
                Log::error('Error creating record: ' . $e->getMessage() . ' - Row data: ' . json_encode($row));
            }
        });

        return response()->json(['message' => 'Data imported successfully!'], 200);
    }
}
