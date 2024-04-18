<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $article) {
            $article->id();
            $article->string('title');
            $article->string('subtitle');
            $article->unsignedBiginteger('text_id');
            $article->foreign('text_id')->references('id')->on('text')->onDelete('cascade');
            $article->unsignedBiginteger('image_id');
            $article->foreign('image_id')->references('id')->on('image')->onDelete('cascade');
            $article->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
};
