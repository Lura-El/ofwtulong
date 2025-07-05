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
        Schema::create('request_assistance', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('passport_num');
            $table->string('iqama_number')->nullable();
            $table->string('gender');
            $table->string('email_fb');
            $table->string('occupation');
            $table->string('personal_phone_num')->nullable();
            $table->string('other_phone_num')->nullable();
            $table->string('ksa_location');
            $table->string('employer_name')->nullable();
            $table->string('employer_number')->nullable();
            $table->string('saudi_agency')->nullable();
            $table->string('phil_agency')->nullable();
            $table->json('uploaded_files')->nullable();
            $table->text('complaint');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_assistance');
    }
};