<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table-> id();
            $table->string('product_name');
            $table->string('product_code');
            $table-> longText('details')->nullable();
            $table->double('product_price');
            $table->string('image')->nullable();
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("category_id")->unsigned()->nullable();
            $table->bigInteger("brand_id")->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('CASCADE');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('CASCADE');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('CASCADE');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
