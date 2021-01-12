<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateContactosTable.
 */
class CreateContactosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('lead_id');
            $table->text('mensaje');
            $table->integer('medio');
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
		Schema::drop('contactos');
	}
}
