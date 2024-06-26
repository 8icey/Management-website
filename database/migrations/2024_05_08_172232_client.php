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
        Schema::create('Client', function (Blueprint $table) {
            $table->bigIncrements('ID_Client');
            $table->string('Nom_client', 50);
            $table->string('Prenom_client', 50);
            $table->string('Wilaya_client', 50);
            $table->string('Mobile');
            $table->string('Fixe');
            $table->string('Email');
            $table->string('Adresse');
            $table->string('Type_client');
            $table->unsignedBigInteger('ICD')->nullable()->default(null);
            $table->string('Issuer_authority')->nullable()->default(null);
            $table->date('Birthday_date')->nullable()->default(null);
            $table->date('Date_issue_id')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Client');
    }
};