<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_tops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_detail_id')->constrained('client_details');
            $table->string('shoulder');
            $table->string('sleeve_length');
            $table->string('top_legth');
            $table->string('arm');
            $table->string('chest');
            $table->string('stomach');
            $table->string('neck');
            $table->string('wrist');
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
        Schema::dropIfExists('client_tops');
    }
}
