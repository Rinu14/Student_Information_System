<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent__infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('parent_name');
            $table->string('mobile');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent__infos');
    }
}
