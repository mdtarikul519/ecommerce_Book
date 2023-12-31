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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->unique()->nullable();
            $table->bigInteger('parent')->default(0);
            $table->string('url', 100)->unique();
            $table->string('image', 100)->nullable();
            $table->string('meta_title', 100)->nullable();
            $table->text('meta_information')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->tinyInteger('creator')->nullable();
            $table->string('slug',50)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });


        Schema::create('product_product_category', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('product_category_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
        Schema::dropIfExists('product_category_product');

    }
};
