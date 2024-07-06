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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->text('address')->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('phone2', 250)->nullable();
            $table->string('phone3', 250)->nullable();
            $table->string('fax', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->text('google_map')->nullable();
            $table->string('facebook', 250)->nullable();
            $table->string('youtube', 250)->nullable();
            $table->string('instagram', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
