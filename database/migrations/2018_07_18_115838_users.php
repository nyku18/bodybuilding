<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->default('2'); 
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          $table->dropColumn('role_id');
    }
}
