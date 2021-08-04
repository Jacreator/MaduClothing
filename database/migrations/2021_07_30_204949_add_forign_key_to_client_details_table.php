<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForignKeyToClientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_details', function (Blueprint $table) {
            $table->foreignId('client_top_id')->constrained('client_tops');
            $table->foreignId('client_trouser_id')->constrained('client_trousers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_details', function (Blueprint $table) {
            $table->dropForeign('client_details_client_top_id_foreign');
            $table->dropForeign('client_details_client_trouser_id_foreign');
            $table->dropColumn('client_top_id');
            $table->dropColumn('client_trouser_id');
        });
    }
}
