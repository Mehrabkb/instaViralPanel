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
        Schema::create('report_items', function (Blueprint $table) {
            $table->id('report_item_id');
            $table->unsignedBigInteger('report_id');
            $table->unsignedBigInteger('page_id');
            $table->string('social_date_registered' , 255);
            $table->integer('social_story_viewed')->default(0);
            $table->string('social_story_excel_file' , 255)->nullable();
            $table->string('social_story_video_file' , 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_items');
    }
};
