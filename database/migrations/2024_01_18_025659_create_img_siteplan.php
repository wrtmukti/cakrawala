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
        Schema::create('img_siteplan', function (Blueprint $table) {
            $table->id('id_img_siteplan');
            $table->unsignedBigInteger('id_project');
            $table->foreign('id_project')->references('id_project')->on('projects')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('img_file');
            $table->enum('carousel_active', ['Y', 'N'])->default('N');
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
        Schema::dropIfExists('img_siteplan');
    }
};
