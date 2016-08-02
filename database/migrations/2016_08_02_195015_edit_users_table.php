<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->uuid('user_id')->after('remember_token')->index();
            $table->integer('user_type_id')->after('id')->nullable()->index();
        });

        Schema::create('user_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resources', function(Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropIndex('user_id');

            $table->dropColumn('user_type_id');
            $table->dropIndex('user_type_id');
        });

        Schema::drop('user_types');
    }
}
