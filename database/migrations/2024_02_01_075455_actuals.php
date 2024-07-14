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
        Schema::create('actuals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('planning_id');
            $table->unsignedBigInteger('project_id');
            $table->integer('days');
            $table->string('task_name');
            $table->date('start_date');
            $table->string('activities');
            $table->string('results');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('actuals');
    }
};
