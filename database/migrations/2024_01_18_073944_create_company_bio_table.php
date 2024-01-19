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
        Schema::create('company_bio', function (Blueprint $table) {
            $table->id('id_company_bio');
            $table->string('company_name', 50)->nullable();
            $table->string('company_nickname', 50)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('link_maps', 200)->nullable();
            $table->text('iframe_maps')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('instagram', 50)->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('twitter', 50)->nullable();
            $table->string('youtube', 50)->nullable();
            $table->string('logo', 50)->nullable();
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
        Schema::dropIfExists('company_bio');
    }
};
