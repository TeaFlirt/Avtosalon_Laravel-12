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
    Schema::create('cars', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('brand');
        $table->integer('year');
        $table->string('engine');
        $table->string('transmission');
        $table->decimal('price', 10, 2);
        $table->string('photo');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
