<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('User', function (Blueprint $table) {
            $table->bigIncrements('ID_user');
            $table->string('Email', 50);
            $table->string('Password', 254);
            $table->string('Role', 50);
            $table->string('Nom_user', 50);
            $table->string('Prenom_user', 50);
            $table->string('Wilaya_user', 50);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('User');
    }
};
