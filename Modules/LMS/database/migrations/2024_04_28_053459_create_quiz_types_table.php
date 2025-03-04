<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'quiz_types',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->integer('status')->default(0);
                $table->timestamps();
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_types');
    }
};
