<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user_level', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->enum('view', ['0', '1'])->default('0');
        //     $table->enum('edit', ['0', '1'])->default('0');
        //     $table->enum('search', ['0', '1'])->default('0');
        //     $table->enum('delete', ['0', '1'])->default('0');
        //     $table->enum('siberdoctor', ['0', '1'])->default('0');
        //     $table->enum('admin', ['0', '1'])->default('0');
        //     $table->timestamps();
        // });

        Schema::create('user_level', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        

        // Schema::create('user_level_permission', function (Blueprint $table) {
        //     $table->id();
        //     $table->bigInteger('user_level_id');
        //     $table->string('table_name');
        //     $table->bigInteger('permission');
        //     $table->timestamps();
        // });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('user_level_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });

        Schema::dropIfExists('user_level');

        // Schema::dropIfExists('user_level_permission');
    }
}
