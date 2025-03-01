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
        Schema::create('tours', function(Blueprint $table){
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->decimal('price', 10, 3);
            $table->time('return_time');
            $table->string('dress_code', 200);
            $table->foreignId('destination_id')->constrained('locations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('departure_id')->constrained('departures')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
