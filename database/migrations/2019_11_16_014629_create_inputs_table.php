<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblinput', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("idk",8);
            $table->string("alamat",50);
            $table->string("kdpos",50);
            $table->string("klasifikasi",25);
            $table->string("fasilitas",50);
            $table->string("ukuran",50);
            $table->string("luas",50);
            $table->string("idn",8);
            $table->string("harga",50);
            $table->string("gambar",50);
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
        Schema::dropIfExists('tblinput');
    }
}
