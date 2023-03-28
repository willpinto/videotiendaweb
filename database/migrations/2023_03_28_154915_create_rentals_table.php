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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('code')->nullable();
            $table->date('date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('value')->nullable();
            $table->string('penalty')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('copy_id');
            $table->unsignedBigInteger('receipt_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('copy_id')->references('id')->on('copies');
            $table->foreign('receipt_id')->references('id')->on('receipts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
