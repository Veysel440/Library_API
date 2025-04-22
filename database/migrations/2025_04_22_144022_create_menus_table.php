<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('menus')) {
            Schema::create('menus', function (Blueprint $table) {
                $table->id();
                $table->string('menu_name');
                $table->string('url');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
