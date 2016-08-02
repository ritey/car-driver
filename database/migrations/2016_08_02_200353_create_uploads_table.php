<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('enabled')->default(1);
            $table->string('user_id',36);
            $table->string('folder')->index();
            $table->string('extension',12);
            $table->string('filename',256);
            $table->string('maskname',128);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('articles_to_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id');
            $table->integer('upload_id');

            $table->index('article_id');
            $table->index('upload_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uploads');
        Schema::drop('articles_to_uploads');
    }
}
