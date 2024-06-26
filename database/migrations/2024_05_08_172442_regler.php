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
        Schema::create('Regler', function (Blueprint $table) {
            $table->unsignedBigInteger('IDderangement');
            $table->unsignedBigInteger('IDuser');
            $table->foreign('IDderangement')->references('ID_derangement')->on('Derangement');
            $table->foreign('IDuser')->references('ID_user')->on('User');
            $table->timestamp('updated_at')->nullable()->default(null);

    // Add 'created_at' column
    $table->timestamp('created_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Regler');
    }
};
