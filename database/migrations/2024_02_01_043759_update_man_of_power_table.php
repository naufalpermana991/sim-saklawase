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
        Schema::table('man_of_powers', function (Blueprint $table) {
            $table->string('worker_name1')->nullable()->change();
            $table->string('worker_responsibility1')->nullable()->change();
            $table->string('worker_name2')->nullable()->change();
            $table->string('worker_responsibility2')->nullable()->change();
            $table->string('worker_name3')->nullable()->change();
            $table->string('worker_responsibility3')->nullable()->change();
            $table->string('worker_name4')->nullable()->change();
            $table->string('worker_responsibility4')->nullable()->change();
            $table->string('additional_worker')->nullable()->change();
            $table->string('reason')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('man_of_powers', function (Blueprint $table) {
            $table->string('worker_name1')->nullable(false)->change();
            $table->string('worker_responsibility1')->nullable(false)->change();
            $table->string('worker_name2')->nullable(false)->change();
            $table->string('worker_responsibility2')->nullable(false)->change();
            $table->string('worker_name3')->nullable(false)->change();
            $table->string('worker_responsibility3')->nullable(false)->change();
            $table->string('worker_name4')->nullable(false)->change();
            $table->string('worker_responsibility4')->nullable(false)->change();
            $table->string('additional_worker')->nullable(false)->change();
            $table->string('reason')->nullable(false)->change();
        });
    }
};
