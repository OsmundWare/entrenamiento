<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlquilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquilers',function(Blueprint $table)
        {
            $table->increments('id');
            $table->Integer('cilindro_id')->unsigned();
            $table->Integer('tercero_id')->unsigned();
            $table->Date('fecha');
            $table->enum('estado',['alquilado','devuelto']);
            $table->String('notas',1000);
            $table->timestamps();

            $table->foreign('cilindro_id')
                ->references('id')->on('cilindros')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

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
        Schema::drop('alquilers');
    }
}
