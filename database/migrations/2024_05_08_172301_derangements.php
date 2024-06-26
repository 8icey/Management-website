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
        Schema::create('Derangement', function (Blueprint $table) {
            $table->bigIncrements('ID_Derangement');
            $table->string('Status_Derangement', 50);
            $table->string('Type_derangement', 50);
            // $table->string('Wilaya_Derangement', 50);
            $table->unsignedBigInteger('IDclient')->nullable()->default(null);
            $table->foreign('IDclient')->references('ID_client')->on('Client');
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Derangement');
    }
};
