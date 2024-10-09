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
        // Schema::create('pays', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('festival_id'); // lấy ra thông tin hui
        //     $table->unsignedBigInteger('panic_id'); // lấy ra tkỳ và thăm kêu
        //     $table->date('closing_date'); //( ngày chốt )
        //     $table->date('payment_date'); // Ngày trả
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
    }
};
