<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity');
            $table->timestamps();
            
            // Indexes
            $table->index('user_id', 'sessions_user_id_index');
            $table->index('last_activity', 'sessions_last_activity_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
