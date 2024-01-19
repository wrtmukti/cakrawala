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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('id_project');
            $table->string('project_name', 50)->nullable();
            $table->text('link_maps')->nullable();
            $table->text('iframe_maps')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Ini akan menambahkan deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
