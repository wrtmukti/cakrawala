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
        Schema::create('img_hero_transparent', function (Blueprint $table) {
            $table->id('id_img_hero_transparent');
            $table->text('img_file')->nullable();
            $table->string('title', 100)->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('img_hero_transparent');
    }
};
