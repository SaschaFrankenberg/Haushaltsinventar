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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->integer('quantity');
            $table->text('unit');
            $table->integer('minimum_quantity')->default(0);
            $table->text('expires_at')->nullable();
            $table->integer('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
