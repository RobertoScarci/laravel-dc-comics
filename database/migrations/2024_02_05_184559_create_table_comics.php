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
        Schema::create('comic', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description');
            $table->text('thumbnail');
            $table->string('price', 50);
            $table->string('series', 50);
            $table->date('sale', 50);
            $table->string('type', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_comics');
    }
};
