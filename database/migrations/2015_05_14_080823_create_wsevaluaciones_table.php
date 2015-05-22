<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWsevaluacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// EVENTOS
		Schema::create('ws_evaluaciones', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned()->nullable();
            $table->integer('evento_id')->unsigned()->nullable();
            $table->integer('dirigido')->unsigned()->nullable();
            $table->integer('descripcion')->nullable();
            $table->integer('duracion_preg')->nullable();
            $table->integer('duracion_exam')->nullable();
            $table->integer('one_bye_one')->nullable();
            $table->boolean('created_by')->unsigned()->nullable();
            $table->timestamps();
        });



	
		Schema::table('ws_evaluaciones', function(Blueprint $table) {
			$table->foreign('nivel_id')->references('id')->on('ws_categorias')->onDelete('cascade');
			$table->foreign('evento_id')->references('id')->on('ws_eventos')->onDelete('cascade');
			$table->foreign('created_by')->references('id')->on('ws_users')->onDelete('cascade');
		});
		// INSCRIPCIONES
		Schema::create('ws_preguntas_evalucion', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('evaluacion_id')->unsigned()->nullable();
            $table->integer('tipo_id')->unsigned()->nullable();
            $table->integer('pregunta_id')->unsigned()->nullable();
            $table->integer('added_by')->unsigned()->nullable();
            $table->timestamps();
        });
		Schema::table('ws_preguntas_evalucion', function(Blueprint $table) {
			$table->foreign('evaluacion_id')->references('id')->on('ws_evaluaciones')->onDelete('cascade');
			$table->foreign('added_by')->references('id')->on('ws_users')->onDelete('cascade');
		});


	
		

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ws_evaluaciones');
		Schema::drop('ws_preguntas_evalucion');
		
	}

}
