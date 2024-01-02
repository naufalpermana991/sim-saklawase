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
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->string('sub_task');
            $table->string('volume');
            $table->enum('unit', ['m2', 'm1', 'kg', 'lbr', 'pcs']);
            $table->date('date_started');
            $table->date('date_finished');
            $table->integer('mop');
            $table->integer('percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plannings');
    }
};
