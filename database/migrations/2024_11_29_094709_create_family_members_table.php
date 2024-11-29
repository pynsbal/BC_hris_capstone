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
        Schema::create('family_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('name');
            $table->string('occupation')->nullable();
            $table->string('contact_number');
            $table->enum('relationship', ['Spouse', 'Son', 'Daughter', 'Father', 'Mother', 'Sister', 'Brother', 'Aunt', 'Uncle', 'Cousin', 'Grandfather', 'Grandmother', 'Godfather', 'Godmother']);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_members');
    }
};
