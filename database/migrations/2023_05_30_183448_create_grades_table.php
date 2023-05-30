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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('set null');

            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')->references('id')->on('users')->onDelete('set null');

            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('set null');

            $table->integer('grade')->nullable();
            $table->string('comment')->nullable();
            $table->string('grade_date')->nullable();
            $table->boolean('appearance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
