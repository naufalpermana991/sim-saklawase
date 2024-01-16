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
        Schema::create('man_of_powers', function (Blueprint $table) {
            $table->id();
            $table->string('worker_name1');
            $table->string('worker_name2');
            $table->string('worker_name3');
            $table->string('worker_name4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manofpower');
    }
};
