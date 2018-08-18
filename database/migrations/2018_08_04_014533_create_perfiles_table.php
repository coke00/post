<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('author_id');
          $table->string('apodo');
          $table->text('about');
          $table->text('caracteristicas_basicas');
          $table->string('foto_perfil')->nullable();
          $table->integer('fono_contacto');
          $table->text('horarios');
          $table->text('ciudad');
          $table->text('experiencias');
          $table->integer('certificada');
          $table->text('tipo_scort');
          $table->string('image')->nullable();
          $table->string('slug')->unique();
          $table->text('meta_description');
          $table->text('meta_keywords');
          $table->enum('status', ['AUTORIZADO', 'SUSPENDIDO', 'PENDIENTE'])->default('PENDIENTE');
          $table->boolean('featured')->default(0);
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
        Schema::dropIfExists('perfiles');
    }
}
