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
        Schema::create('creative_arts', function (Blueprint $table) {
            $table->id();
            $table->string('student_no');
            $table->string('subject');
            $table->string('group_work');
            $table->string('test1');
            $table->string('project_work');
            $table->string('test2');
            $table->string('raw_exams_score');
            $table->string('class_total');
            $table->string('SBA');
            $table->string('Exams');
            $table->string('Total_Score');
            $table->string('position_in_class');
            $table->enum('deleted', [ '0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creative_arts');
    }
};
