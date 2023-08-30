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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('description');
            $table->text('requirements');
            $table->string('location');
            $table->string('salary');
            $table->date('deadline');
            $table->string('type');
            $table->string('schedule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
