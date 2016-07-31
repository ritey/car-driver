<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {

            $table->increments('id');
            $table->boolean('enabled');
            $table->string('slug')->nullable()->index();
            $table->integer('sort_order')->default(0);
            $table->string('name',156);
            $table->string('meta_date',36)->nullable();
            $table->string('meta_author',156)->nullable();
            $table->string('meta_title',156)->nullable();
            $table->string('meta_description',156)->nullable();
            $table->string('img',256)->nullable();
            $table->text('summary')->nullable();
            $table->text('body')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('live_at')->nullable();

            $table->index('enabled');
            $table->index('sort_order');
            $table->index('live_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
