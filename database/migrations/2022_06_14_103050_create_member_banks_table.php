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
    public function up()
    {
        Schema::create('member_banks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained('users','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('bank_id');
            $table->string('account_num');
            $table->string('payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_banks');
    }
};
