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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique()->comment('Student ID or Registration Number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('nationality')->nullable();
            $table->string('identification_number')->nullable()->comment('National ID/Passport');
            
            // Academic information
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->date('enrollment_date');
            $table->date('graduation_date')->nullable();
            $table->enum('status', ['active', 'inactive', 'suspended', 'graduated'])->default('active');
            $table->string('current_semester')->nullable();
            
            // Guardian information
            $table->string('guardian_name')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_relationship')->nullable();
            
            // Additional fields
            $table->string('profile_image')->nullable();
            $table->text('notes')->nullable();
            
            // Authentication fields
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};