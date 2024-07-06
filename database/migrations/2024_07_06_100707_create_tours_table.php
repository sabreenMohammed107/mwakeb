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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string("tour_name", 150);
            $table->string("tour_banner", 200);
            $table->boolean("tour_type")->comment("0 => Private, 1 => Group"); // [0 => Private, 1 => Group]
            $table->float("tour_cost");
            $table->float("total_cost");
            $table->date('tour_date');
            $table->integer('adults_count')->default(1);
            $table->integer('children_count')->default(0);
            $table->longText('overview')->nullable();
            $table->longText('ar_overview')->nullable();
            $table->text('banner')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->integer('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
