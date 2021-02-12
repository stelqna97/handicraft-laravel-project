<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table-> id();
            $table->string('name');
            $table->string('genre')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            //$table->bigInteger("role_id")->unsigned();
            $table->rememberToken();
            $table->timestamps();


        // $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE')->onUpdate('CASCADE');

        });

       /* Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('CASCADE');;
         });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      /*  Schema::table('users', function(Blueprint $table)
        {
            $table->dropForeign('users_role_id_foreign'); 
        });*/
        Schema::dropIfExists('users');
    }
}
