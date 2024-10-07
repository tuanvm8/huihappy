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
        Schema::create('panics', function (Blueprint $table) {
            $table->id();
            $table->string('period'); //( kỳ)
            $table->unsignedBigInteger('user_id');
            $table->string('call'); //( thăm kêu)
            $table->string('money'); //( tiền hụi)
            $table->string('apart_from'); //( trừ thảo)
            $table->string('total'); //( Còn lại)
              
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panics');
    }
};
