<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('sale_start');
            $table->string('sale_end');
            $table->string('dsp');
            $table->string('sale_store');
            $table->string('sale_type');
            $table->string('sale_user_type');
            $table->string('territory');
            $table->string('product_upc');
            $table->string('product_reference');
            $table->string('product_catalog_number');
            $table->string('product_label');
            $table->string('product_artist');
             $table->string('product_title');
            $table->string('asset_artist');
            $table->string('asset_title');
            $table->string('asset_version');
            $table->string('asset_duration');
            $table->string('asset_isrc');
            $table->string('asset_quantity');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
