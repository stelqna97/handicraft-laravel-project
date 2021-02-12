<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
           // $table->bigInteger("product_id")->unsigned();
            $table->string('order_number')->unique();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("publisher_id")->unsigned();
            $table->unsignedInteger('quantity')->default(1);
            $table->string('status')->default('Предстоящ');
            $table->decimal('grand_total', 20, 2);
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('city');
            $table->string('country');
            $table->string('post_code');
            $table->string('phone_number');
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('CASCADE');
           // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('CASCADE');
        });

      //  Schema::table('orders', function (Blueprint $table) {
        
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
