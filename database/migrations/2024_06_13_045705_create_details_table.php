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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_id');
            $table->string('image');
            $table->string('profession');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('short_bio');
            $table->text('interest');
            $table->string('website')->unique();
            $table->string('portfolio')->unique();
            $table->string('insta')->unique();
            $table->string('facebook')->unique();
            $table->string('twitter')->unique();
            $table->string('linkedin')->unique();
            $table->string('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
