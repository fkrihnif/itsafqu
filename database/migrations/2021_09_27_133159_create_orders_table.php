<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('templates_id');
            $table->integer('users_id');
            $table->string('nama_lengkap_pria');
            $table->string('nama_panggilan_pria');
            $table->string('ayah_pria');
            $table->string('ibu_pria');
            $table->string('nama_lengkap_pr');
            $table->string('nama_panggilan_pr');
            $table->string('ayah_pr');
            $table->string('ibu_pr');
            $table->string('kode_pesanan');
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
        Schema::dropIfExists('orders');
    }
}
