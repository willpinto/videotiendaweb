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
        Schema::create('clients', function (Blueprint $table) {
           $table->id()->autoIncrement();
           $table->string('document')->nullable();
           $table->string('names')->nullable();
           $table->string('surnames')->nullable();
           $table->string('address')->nullable();
           $table->string('celphone')->nullable();
           $table->string('email')->nullable();
           $table->date('birth_date')->nullable();
           $table->string('gender')->nullable();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
