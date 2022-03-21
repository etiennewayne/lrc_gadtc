<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id('material_id');
            $table->string('material_type')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('authors')->nullable();
            $table->string('edition')->nullable();
            $table->string('lccn')->nullable();
            $table->string('isbn')->nullable();
            $table->string('issn')->nullable();


            $table->string('sys_user')->nullable();
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
        Schema::dropIfExists('materials');
    }
}
