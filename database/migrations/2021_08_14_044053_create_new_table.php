<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new', function (Blueprint $table) {
            $table->id();
            $table->String('title',300);
            $table->String('thumbnail',500);
            $table->longText('content');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->longText('demo');
            $table->integer('deleted');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new');
    }
}
