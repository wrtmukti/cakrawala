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
            $table->string('project_name', 50);
            $table->text('link_maps');
            $table->text('iframe_maps');
            $table->timestamps(); // Ini akan menambahkan created_at dan updated_at
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
