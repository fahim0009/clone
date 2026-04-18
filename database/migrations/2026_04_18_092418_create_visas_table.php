<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->string('visa_no')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('passport_number')->unique();
            $table->string('religion')->nullable();
            $table->date('passport_expiry_date')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->date('valid_until')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->default('Bangladesh');
            $table->string('sex')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visas');
    }
};
