<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('image');
            $table->json('benefits')->nullable();
            $table->json('gallery')->nullable();
            $table->json('testimonials')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
