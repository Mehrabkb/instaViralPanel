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
            $table->string('social_name' , 255);
            $table->string('social_link' , 255);
            $table->string('social_image' , 255);
            $table->integer('social_follower_count')->default(0);
            $table->string('social_date_registered' , 255);
            $table->integer('social_story_viewed')->default(0);
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
