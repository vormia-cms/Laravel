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
        Schema::create('settings', function (Blueprint $table) {
            $table->bigInteger('setting_id',true);
            $table->string('setting_type',15)->default('general');
            $table->string('setting_title',200);
            $table->longText('setting_value')->nullable();
            $table->tinyInteger('setting_flg')->default(1);
            $table->dateTime('setting_created_at');
            $table->timestamp('setting_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
