<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataList;

class DataListController extends Controller
{
//    public function getAllLists(Request $request)
//    {
//        $page = $request->query('page', 1);
//        $pageSize = $request->query('pageSize', 500);
//
//        $dataList = DataList::paginate($pageSize, ['*'], 'page', $page);
//        return response()->json($dataList);
//    }

    public function searchWithArtist(Request $request)
    {
        // Get the search term from the request
        $searchTerm = $request->query('artist');

        // Validate the search term (optional)
        if (empty($searchTerm)) {
            return response()->json(['message' => 'Search term is required'], 400);
        }

        // Perform the search using the where method to filter by AssetArtist
        $dataList = DataList::where('asset_artist', 'LIKE', '%' . $searchTerm . '%')->get();

        // Return the filtered data as a JSON response
        return response()->json($dataList);
    }

}
