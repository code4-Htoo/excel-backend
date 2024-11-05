<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataList extends Model
{
    use HasFactory;

    protected $table = 'records';
    protected $fillable = [
        'sale_start',
        'sale_end',
        'dsp',
        'sale_store',
        'sale_type',
        'sale_user_type',
        'territory',
        'product_upc',
        'product_reference',
        'product_catalog_number',
        'product_label',
        'product_artist',
        'product_title',
        'asset_artist',
        'asset_title',
        'asset_version',
        'asset_duration',
        'asset_isrc',
        'asset_quantity',
    ];
}
