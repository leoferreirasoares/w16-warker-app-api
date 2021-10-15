<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
class Postos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postos', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->integer('cidade_id')->length(11)->unsigned();
            $table->integer('reservatorio');
            $table->double('latitude', 8, 2);
            $table->double('longitude', 8, 2);
            $table->timestamps();
            $table->foreign('cidade_id')
                ->references('id')
                ->on('cidades')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postos');
    }
}
