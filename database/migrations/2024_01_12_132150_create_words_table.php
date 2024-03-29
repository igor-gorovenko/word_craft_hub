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
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string('word');
            $table->unsignedBigInteger('part_of_speech_id')->nullable();
            $table->string('translate')->nullable();
            $table->float('frequency')->nullable();
            $table->string('slug');
            $table->timestamps();

            $table->foreign('part_of_speech_id')->references('id')->on('parts_of_speech')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('words');
    }
};
