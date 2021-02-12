<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
           $table->bigInteger('user_id')->unsigned();
           $table->bigInteger('role_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

           // $table->primary(['user_id', 'role_id']);
            $table->timestamps();
        });

       /* Schema::table('role_user', function (Blueprint $table) {
             $table->foreign('user_id')->references()->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references()->on('role')
                ->onUpdate('cascade')->onDelete('cascade');
                $table->primary(['user_id', 'role_id']);
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');

          Schema::table('role_user', function (Blueprint $table) {
             $table->foreign('user_id')->references()->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references()->on('role')
                ->onUpdate('cascade')->onDelete('cascade');
                $table->primary(['user_id', 'role_id']);
        });
    }
}
