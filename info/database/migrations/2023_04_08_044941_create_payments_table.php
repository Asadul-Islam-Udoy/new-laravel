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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('payment_id')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('priority')->default(1);
            $table->string('short_name')->unique();
            $table->string('no')->nullable()->comment('Payment No');
            $table->text('transation_id')->nullable();
            $table->string('type')->nullable()->comment('agent|personal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
