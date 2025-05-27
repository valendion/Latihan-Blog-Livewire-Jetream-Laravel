<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('text_color')->nullable()->change();
            $table->string('bg_color')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('text_color')->nullable(false)->change();
            $table->string('bg_color')->nullable(false)->change();
        });
    }
};
