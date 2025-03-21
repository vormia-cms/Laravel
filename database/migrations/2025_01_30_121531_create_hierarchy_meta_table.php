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
        Schema::create('hierarchy_meta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hierarchy')->references('id')->on('hierarchy')->onDelete('cascade');
            $table->string('key');
            $table->text('value')->nullable();
            $table->integer('flag')->default(1);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hierarchy_meta');
    }
};
