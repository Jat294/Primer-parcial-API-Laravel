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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->integer('year');
            $table->enum('type', ['car', 'truck', 'motorcycle']);
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->boolean('is_available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('vehicles');
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
