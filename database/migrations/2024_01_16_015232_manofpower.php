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
            $table->unsignedBigInteger('planning_id');
            $table->unsignedBigInteger('project_id');
            $table->string('task_name');
            $table->date('start_date');
            $table->string('worker_name1');
            $table->string('worker_responsibility1');
            $table->string('worker_name2');
            $table->string('worker_responsibility2');
            $table->string('worker_name3');
            $table->string('worker_responsibility3');
            $table->string('worker_name4');
            $table->string('worker_responsibility4');
            $table->string('additional_worker');
            $table->string('reason');
            $table->timestamps();

            $table->foreign('planning_id')->references('id')->on('plannings')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
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
