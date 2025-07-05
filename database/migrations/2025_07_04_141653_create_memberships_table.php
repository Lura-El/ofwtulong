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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('passport_num');
            $table->string('email_address');
            $table->string('mobile_num');
            $table->date('birthdate');
            $table->string('civil_status');
            $table->string('job_position');
            $table->string('job_site');
            $table->string('employer_name');
            $table->string('employer_address');
            $table->string('employer_email');
            $table->string('employer_num');
            $table->string('recruitment_agency_phil');
            $table->string('contact_num_agency');
            $table->string('email_add_agency');
            $table->string('foreign_agency');
            $table->string('contact_num_foreign_agency');
            $table->string('email_add_foreign_agency');
            $table->string('next_of_kin');
            $table->string('relationship_with_ofw');
            $table->string('contact_number_relative');
            $table->string('relative_address_phil');
            $table->string('relative_email_add');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};