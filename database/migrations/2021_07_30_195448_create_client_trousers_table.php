<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTrousersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_trousers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_detail_id')->constrained('client_details');
            $table->string('waist');
            $table->string('seat');
            $table->string('laps');
            $table->string('length');
            $table->string('kneel');
            $table->string('Ankle');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_trousers');
    }
}
