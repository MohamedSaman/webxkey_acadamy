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
       Schema::create('courses', function (Blueprint $table) {
    $table->id();
    $table->string('code')->unique(); // This must exist
    $table->string('name');
    $table->text('description')->nullable();
    $table->integer('duration_months')->nullable();
    $table->decimal('fee', 10, 2)->nullable();
    $table->enum('status', ['active', 'inactive'])->default('active');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
