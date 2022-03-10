<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyens', function (Blueprint $table) {
            $table->id();
            $table->string('tenchuyen');
            $table->integer('idtau');
            $table->integer('idtuyen');
            $table->string('date');
            $table->string('time');
            $table->string('description');
            $table->float('gia');
            $table->integer('active');
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
        Schema::dropIfExists('chuyens');
    }
}
