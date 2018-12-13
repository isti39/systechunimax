<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('founder');
            $table->string('about');
            $table->string('mission');
            $table->string('vision');
            $table->string('full_address');
            $table->string('logopath');
            $table->string('copyright');
            $table->string('facebook');
            $table->string('google');
            $table->string('twitter');
            $table->string('linkdin');
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
        Schema::dropIfExists('generals');
    }
}
