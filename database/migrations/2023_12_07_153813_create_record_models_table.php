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
        Schema::create('record_models', function (Blueprint $table) {
            $table->id();
            $table->string("event");
            $table->string("name");
            $table->string("borrow");
            $table->string("return");
            $table->string("costume");
            $table->string("attire");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_models');
    }
};
