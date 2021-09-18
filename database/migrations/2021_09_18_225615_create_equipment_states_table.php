<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentStatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_states', function (Blueprint $table) {
            $table->id('id');
            $table->string('note', 200);
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('equipment_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipment_states');
    }
}
