<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['Laptop', 'Smart Phone', 'Head Phone', 'Smart Watch']);
            $table->string('name')->unique();   //ASUS, HP
            $table->string('details', 500);

            //foreign key
            $table->integer('logo')->unsigned()->default(4);
            $table->foreign('logo')->references('id')->on('images')->onDelete('cascade');
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
        Schema::dropIfExists('brands');
    }
}
