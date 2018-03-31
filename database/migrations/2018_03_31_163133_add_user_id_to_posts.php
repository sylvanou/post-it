<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create schema to migrate
        Schema::table('posts', function($table){ // First param is table name
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Used to delete the column
        Schema::table('posts', function($table){ // First param is table name
            $table->dropColumn('user_id');
        });
    }
}
