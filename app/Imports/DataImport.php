<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');
class DataImport implements ToModel,  WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new Data([
            'SaleStart' => $row['Sale Start'],
            'DSP' => $row['DSP'],
            'SaleStore' => $row['Sale Store'],
            'SaleType' => $row['Sale Type'],
            'SaleUserType' => $row['Sale User Type'],
            'Territory' => $row['Territory'],
            'ProductUPC' => $row['Product UPC'],
            'ProductReference' => $row['Product Reference'],
            'ProductCatalogNumber' => $row['Product Catalog Number'],
            'ProductLabel' => $row['Product Label'],
            'ProductArtist' => $row['Product Artist'],
            'AssetArtist' => $row['Asset Artist'],
            'AssetTitle' => $row['Asset Title'],
            'AssetDuration' => $row['Asset Duration'],
            'AssetISRC' => $row['Asset ISRC'],
        ]);
    }
}
