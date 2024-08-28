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
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('report_name' , 255);
            $table->boolean('report_status')->default(false);
            $table->string('report_excel_file' , 255)->nullable();
            $table->string('report_zip_file' , 255)->nullable();
            $table->string('report_type' , 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
