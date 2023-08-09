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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobil')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('street_number_addition')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('vatnumber')->nullable();
            $table->string('iban')->nullable();
            $table->biginteger('customer_number')->unique();
            $table->string('chamberofcommercenumber')->nullable();
            $table->integer('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
