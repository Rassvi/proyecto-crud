<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            
            $table->char('clave', 3)->unique();
            $table->string('articulo', 50)->unique();
            $table->string('descripcion', 1000)->nullable();
            $table->decimal('precio', 5, 2)->unsigned();
            $table->smallInteger('inventario')->unsigned();
            $table->char('categoria', 1)->nullable()->default(0);
            $table->boolean('garantia')->default(0);

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
        Schema::dropIfExists('articulos');
    }
}
