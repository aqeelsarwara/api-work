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
        Schema::create('localdbstore', function (Blueprint $table) {
            $table->id();
            $table->integer('departmentId');
            $table->text('description');
            $table->string('userId');
            $table->integer('orgId');
            $table->string('sessionId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localdbstore');
    }
};
