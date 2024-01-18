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
            $table->string('company_name', 50);
            $table->string('company_nickname', 50);
            $table->string('address', 100);
            $table->string('link_maps', 200);
            $table->text('iframe_maps');
            $table->string('email', 50);
            $table->string('phone', 50);
            $table->string('whatsapp', 20);
            $table->string('instagram', 50);
            $table->string('facebook', 50);
            $table->string('twitter', 50);
            $table->string('youtube', 50);
            $table->string('logo', 50);
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
