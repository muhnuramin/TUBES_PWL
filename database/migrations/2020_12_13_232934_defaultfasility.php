<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Defaultfasility extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('fasilitas')->default('1 Double Bed (180 cm x 200 cm), Air Conditioning, Flat TV Screen 32, Cold/Hot Water, Complimentary 2 Bottle Of Mineral Water, Free Wi-Fi Internet Access');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
