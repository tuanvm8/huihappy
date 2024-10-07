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
        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->date('start_date'); //( ngày bắt đầu)
            $table->string('money'); //( số tièn)
            $table->string('cut_open'); //( khui, VD: ngày 15 lần)
            $table->string('part'); //( số phần : vd: 5-10)
            $table->unsignedBigInteger('user_id');
            $table->string('note'); //( ghi chú)
            $table->string('status'); //( Tình trạng: 11/15)
            $table->unsignedTinyInteger('is_supported')->default(0); //( 0: để trống 1: Ok)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('festivals');
    }
};
