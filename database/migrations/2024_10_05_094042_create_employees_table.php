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

            // Unique employee identifier
            $table->string('employee_id')->unique();

            // // Foreign key to link with admins.username
            // $table->string('username')->nullable();
            // $table->foreign('username')->references('username')->on('admins')->onDelete('set null');

            // Password and email
            // $table->string('password');
            // $table->string('email')->unique();

            // Personal details
            $table->string('prefix')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('nickname')->nullable();
            $table->string('gender');
            $table->string('religion')->nullable();
            $table->string('civil_status');
            $table->string('citizenship');
            $table->date('birthday');
            $table->string('place_of_birth');
            $table->string('phone_number')->nullable();

            // Foreign keys for department and position
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null');

            // $table->unsignedBigInteger('position_id')->nullable();
            // $table->foreign('position_id')->references('id')->on('positions')->onDelete('set null');

            // // Employment details
            // $table->date('date_started');
            // $table->string('status');

            // // Foreign keys for address information
            // $table->unsignedBigInteger('present_address_id')->nullable();
            // $table->foreign('present_address_id')->references('id')->on('addresses')->onDelete('set null');

            // $table->unsignedBigInteger('permanent_address_id')->nullable();
            // $table->foreign('permanent_address_id')->references('id')->on('addresses')->onDelete('set null');

            // $table->unsignedBigInteger('provincial_address_id')->nullable();
            // $table->foreign('provincial_address_id')->references('id')->on('addresses')->onDelete('set null');

            // Government identification numbers
            $table->string('phil_no')->nullable();
            $table->string('pagibig_no')->nullable();
            $table->string('tin')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('prc')->nullable();

            // Profile completion flag
            $table->boolean('profile_completed')->default(false);

            // Timestamps
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
