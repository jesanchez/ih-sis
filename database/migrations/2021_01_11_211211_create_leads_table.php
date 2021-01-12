<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLeadsTable.
 */
class CreateLeadsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leads', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200);
            $table->string('apellido_paterno',200);
            $table->string('apellido_materno',200);
            $table->string('curp',200);
            $table->string('calle_numero',200);
            $table->string('ciudad',200);
            $table->string('estado',200);
            $table->string('pais',200);
            $table->string('codigo_postal',200);
            $table->string('telefono',200);
            $table->string('celular',200);
            $table->string('correo',200);
            $table->integer('nivel_id');
            $table->integer('programa_id');
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
		Schema::drop('leads');
	}
}
