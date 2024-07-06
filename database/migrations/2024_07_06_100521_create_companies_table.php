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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('home_title', 250)->nullable();
            $table->string('home_description', 250)->nullable();
            $table->string('home_image', 250)->nullable();
            $table->string('footer_description', 250)->nullable();
            $table->string('why_choose_title', 250)->nullable();
            $table->string('why_choose_description', 250)->nullable();
            $table->longText('overview_title')->nullable();
            $table->longText('overview_description')->nullable();
            $table->longText('mission_title')->nullable();
            $table->longText('mission_description')->nullable();
            $table->longText('vision_title')->nullable();
            $table->longText('vision_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
