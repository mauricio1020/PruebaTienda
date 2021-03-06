<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');           
            $table->string('name', 255);
            $table->string('slug');
            $table->text('description');            
            $table->decimal('price');
            $table->string('image', 300);
            $table->boolean('visible');
            $table->timestamps();           
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
