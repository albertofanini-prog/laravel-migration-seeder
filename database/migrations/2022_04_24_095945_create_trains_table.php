<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 25);
            $table->string('arrive_station', 50);
            $table->string('departure_station', 50);
            $table->timeTz('arrive_hour', 1);
            $table->timeTz('departure_hour', 1);
            $table->smallInteger('train_code');
            $table->smallInteger('number_of_carriage');
            $table->boolean('in_time')->default(1);
            $table->boolean('delayed')->default(0);
            $table->boolean('deleted')->default(1);
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
        Schema::dropIfExists('trains');
    }
}
