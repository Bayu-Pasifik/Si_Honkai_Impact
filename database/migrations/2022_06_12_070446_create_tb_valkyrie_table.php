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
        Schema::create('tb_valkyrie', function (Blueprint $table) {
            $table->bigInteger('id_valkyrie')->autoIncrement();
            $table->string('nama',255);
            $table->string('rank',255);
            $table->string('tipe',255);
            $table->string('role',255);
            $table->string('foto',255);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_valkyrie');
    }
};
