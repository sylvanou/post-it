<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToPost extends Migration
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
            $table->string('cover_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Delete migrated schema
        Schema::table('posts', function($table){ // First param is table name
            $table->dropColumn('cover_image');
        });
    }
}
