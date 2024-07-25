<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneNumbersTable extends Migration
{
    public function up()
    {
        Schema::create('phone_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number')->unique();
            $table->integer('count')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phone_numbers');
    }
}
