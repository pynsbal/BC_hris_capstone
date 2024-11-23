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
    Schema::create('leaves', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('employee_id'); // Define the column
        $table->string('natureOfLeave');
        $table->string('others')->nullable();
        $table->text('reason')->nullable();
        $table->integer('numberOfDays');
        $table->date('fromDate');
        $table->date('toDate');
        $table->string('status')->default('Pending');
        $table->timestamps();

        $table->foreign('employee_id') // Add foreign key constraint
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
