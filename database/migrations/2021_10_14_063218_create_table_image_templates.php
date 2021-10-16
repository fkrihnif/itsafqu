<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableImageTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('packages_id');
            $table->string('nama');
            $table->string('harga');
            $table->text('deskripsi');
            $table->text('thumbnail');
            $table->text('link');
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
        Schema::dropIfExists('image_templates');
    }
}
