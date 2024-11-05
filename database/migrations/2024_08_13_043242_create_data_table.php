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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('SaleStart');
            $table->string('DSP');
            $table->string('SaleStore');
            $table->string('SaleType');
            $table->string('SaleUserType');
            $table->string('Territory');
            $table->string('ProductUPC');
            $table->string('ProductReference');
            $table->string('ProductCatalogNumber');
            $table->string('ProductLabel');
            $table->string('ProductArtist');
            $table->string('AssetArtist');
            $table->string('AssetTitle');
            $table->string('AssetDuration');
            $table->string('AssetISRC');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
