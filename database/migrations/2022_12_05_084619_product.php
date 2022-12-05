<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products', function (Blueprint $table) {
            $table-> id();
            $table->unsignedBigInteger('mitra_id');
            $table->unsignedBigInteger('categori_id');
            $table->string('name');
            $table->integer('price');
            $table->integer('stock');
            $table->char('type', 1);
            $table->timestamps();

            $tabel->foreign('catergory_id')->references('id')->on('catergories')->onDelete('cascade');
            $tabel->foreign('mitra_id')->references('id')->on('mitras')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
