<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->nullable()->default(NULL);
            $table->string('titre')->nullable()->default(NULL);
            $table->longText('description')->nullable()->default(NULL);
            $table->text('tags')->nullable()->default(NULL);
            $table->mediumText('intro')->nullable()->default(NULL);
            $table->bigInteger('creation_par')->unsigned()->nullable()->default(NULL);
            $table->bigInteger('id_category')->unsigned()->nullable()->default(NULL);
            $table->timestamps();

            $table->foreign('creation_par')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
}
