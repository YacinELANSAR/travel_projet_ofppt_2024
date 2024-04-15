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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
    $table->string('name');
    $table->unsignedBigInteger('destination_id');
    $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
    $table->text('description');
    $table->float('etoiles')->nullable();
    $table->string('image')->nullable();
    $table->string('adressePhysique');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
