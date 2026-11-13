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
    Schema::create('trucks', function (Blueprint $table) {
        $table->id();
        $table->string('name');           // 1. Название
        $table->string('brand');          // 2. Марка
        $table->integer('year');          // 3. Год
        $table->string('engine');         // 4. Двигатель
        $table->string('transmission');   // 5. КПП
        $table->decimal('price', 10, 2);  // 6. Цена
        $table->string('photo');          // 7. Фото
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
