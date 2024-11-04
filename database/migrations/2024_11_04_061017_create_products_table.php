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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->decimal('price',10,2)->nullable();

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');

            $table->string('image_path')->default('no_image_available.jpg');
            $table->integer('qty')->nullable();


            $table->integer('alert_stock')->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
