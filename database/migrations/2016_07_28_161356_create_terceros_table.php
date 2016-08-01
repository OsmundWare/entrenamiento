<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceros',function(Blueprint $table)
        {
            $table->increments('id');
            $table->String('nit',50)->unique();
            $table->String('nombre');
            $table->enum('rol',['cliente','proveedor','yo']);
            $table->String('direccion');
            $table->String('telefono',100);
            $table->String('email')->nullable();
            $table->String('notas',1000)->nullable();
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
        Schema::drop('terceros');
    }
}
