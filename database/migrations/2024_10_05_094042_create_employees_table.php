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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('employee_id')->unique();
            $table->foreign('employee_id')->references('employee_id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('prefix')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName')->nullable();
            $table->string('nickName')->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->string('religion')->nullable();
            $table->enum('civilStatus', ['Single', 'Married', 'Widowed', 'Separated', 'Divorced']);
            $table->string('citizenship');
            $table->date('birthday');
            $table->string('email')->unique();
            $table->unsignedBigInteger('dept_id');
            $table->string('position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
