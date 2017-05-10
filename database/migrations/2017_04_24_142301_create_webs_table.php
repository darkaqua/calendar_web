<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //url, nom, descripció
        Schema::create('webs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->default('');
            $table->string('url')->default('');
            $table->text('descripcio')->default('');
            $table->string('updated_at')->default('');
            $table->string('created_at')->default('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('webs');
    }
}
