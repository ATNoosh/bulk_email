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
        Schema::create('emails_sening_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('email_id')->nullable(false);
            $table->unsignedBigInteger('sending_list_id')->nullable(false);
            $table->unique(['email_id','sending_list_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails_sening_lists');
    }
};
