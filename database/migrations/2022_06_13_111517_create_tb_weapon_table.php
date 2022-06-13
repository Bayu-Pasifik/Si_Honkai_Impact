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
        Schema::create('tb_weapon', function (Blueprint $table) {
            $table->bigInteger('id_weapon')->autoIncrement();
            $table->string('nama_weapon');
            $table->string('tipe_weapon');
            $table->string('efek_weapon');
            $table->string('foto_weapon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_weapon');
    }
};
