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
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->string('device_id');
            $table->foreignId('recipe_id')->constrained()->onDelete('cascade');
            /*
            foreignId()->unsignedBigInteger()
            constrained()-> link this column with recipes table and make it foreign key (id)
            onDelete()-> if one row in recipes table has deleted -> delete any row in favourites table that has a relation with that row 
            */ 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favourites');
    }
};
