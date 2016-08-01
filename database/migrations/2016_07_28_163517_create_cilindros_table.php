<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCilindrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cilindros',function(Blueprint $table)
        {
            $table->increments('id');
            $table->String('codigo',100)->unique();
            $table->String('tipo',100);
            $table->Integer('tercero_id')->unsigned();
            $table->enum('estado',['vacio','prestado','llenado','lleno','con propietario']);

            $table->timestamps();

            $table->foreign('tercero_id')
                    ->references('id')->on('terceros')
                    ->onUpdate('CASCADE')
                    ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cilindros');
        //
    }
}
