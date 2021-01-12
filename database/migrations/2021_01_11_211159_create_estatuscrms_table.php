<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEstatuscrmsTable.
 */
class CreateEstatuscrmsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estatuscrm', function(Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',50);
            $table->integer('status_id');
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
		Schema::drop('estatuscrms');
	}
}
