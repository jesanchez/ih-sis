<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateGruposTable.
 */
class CreateGruposTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',200);
            $table->integer('status');
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
		Schema::drop('grupos');
	}
}
