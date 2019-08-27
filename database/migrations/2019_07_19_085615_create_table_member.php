<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('member');
        Schema::create('member', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('email')->unique();
            $table->string('fullname');
            $table->string('position');
            $table->string('phone');
            $table->string('image');
            $table->string('dayin');
            
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
        Schema::dropIfExists('member');
    }
}
