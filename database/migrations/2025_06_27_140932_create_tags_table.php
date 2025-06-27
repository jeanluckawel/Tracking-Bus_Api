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
        Schema::create('tags', function (Blueprint $table) {
            $table->string('TAG_CODE', 30);
            $table->smallInteger('TT_CODEID');
            $table->smallInteger('TAGF_CODEID');
            $table->integer('MST_SQ')->nullable();
            $table->smallInteger('TAG_REPLACED');
            $table->dateTime('TAG_EXPIRY')->nullable();
            $table->string('TAG_IDENTITY', 15)->nullable();
            $table->boolean('TAG_RESTRICTED');

            $table->primary(['TAG_CODE', 'TT_CODEID']);
            $table->foreign('MST_SQ')->references('MST_SQ')->on('employees')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
