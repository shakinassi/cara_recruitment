<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_forms', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->longText('contact');
            $table->string('address');
            $table->string('attachment');
            $table->string('category');
            $table->string('position');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('position_forms');
    }
}
