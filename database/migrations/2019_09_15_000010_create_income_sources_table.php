<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeSourcesTable extends Migration
{
    public function up()
    {
        Schema::create('income_sources', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();

            $table->string('file')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
