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
        Schema::table('user_infos', function (Blueprint $table) {
            $table->longText('address2')->nullable()->after('image');
            $table->string('gender')->nullable()->after('image');
            $table->string('date_birth')->nullable()->after('image');
            $table->string('blood_group')->nullable()->after('image');
            $table->string('hobbies')->nullable()->after('image');
            $table->string('profession')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            $table->dropColumn('address2');
            $table->dropColumn('gender');
            $table->dropColumn('date_birth');
            $table->dropColumn('blood_group');
            $table->dropColumn('hobbies');
            $table->dropColumn('profession');
        });
    }
};
