<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'SaleStart',
        'DSP',
        'SaleStore',
        'SaleType',
        'SaleUserType',
        'Territory',
        'ProductUPC',
        'ProductReference',
        'ProductCatalogNumber',
        'ProductLabel',
        'ProductArtist',
        'AssetArtist',
        'AssetTitle',
        'AssetDuration',
        'AssetISRC',
    ];
}
