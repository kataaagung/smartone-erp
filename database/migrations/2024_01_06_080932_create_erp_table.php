<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erp', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('spk');
            $table->string('customer');
            $table->string('nohp');
            $table->integer('print');
            $table->integer('cutting');
            $table->integer('press');
            $table->integer('full');
            $table->integer('nominal');
            $table->string('invoice');
            $table->string('keterangan');
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
        Schema::dropIfExists('erp');
    }
}
